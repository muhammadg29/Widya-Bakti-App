<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'afiliasi' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'kebutuhan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Registration::create($validated);

        return redirect()->route('registrasi')
                         ->with('success', 'Pendaftaran berhasil dikirim!');
    }
}