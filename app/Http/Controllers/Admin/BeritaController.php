<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tittle' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'publish_date' => 'required|date'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();

            $manager = new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());

            $image = $manager->read($file->getRealPath())
                ->resize(800, 450)
                ->toJpeg();

            $path = public_path('storage/berita/' . $filename);
            file_put_contents($path, $image);

            $validated['image'] = 'berita/' . $filename;
        }

        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Berita created successfully!');
    }

    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {

        $validated = $request->validate([
            'tittle' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'publish_date' => 'required|date'
        ]);

        if ($request->hasFile('image')) {

            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            $validated['image'] = $request->file('image')->store('berita', 'public');
        }

        $berita->update($validated);

        return redirect()->route('berita.index')->with('success', 'Berita updated successfully!');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }

        $berita->delete();
        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully!');
    }
}
