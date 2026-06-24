<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->paginate(10);
        return view('admin.registrations.index', compact('registrations'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected'
        ]);

        $registration = Registration::findOrFail($id);
        $registration->status = $request->status;
        $registration->save();

        return redirect()->route('admin.registrations.index')
                        ->with('success', 'Status berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();
        
        return redirect()->route('admin.registrations.index')
                        ->with('success', 'Data berhasil dihapus!');
    }
}