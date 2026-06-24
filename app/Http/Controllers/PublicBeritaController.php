<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class PublicBeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::orderBy('publish_date', 'desc')
                         ->paginate(9);
        
        return view('public.berita.index', compact('beritas'));
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('public.berita.show', compact('berita'));
    }
}
