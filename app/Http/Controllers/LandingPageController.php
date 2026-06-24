<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class LandingPageController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->take(6)->get();
        return view('welcome', compact('beritas'));
    }
}
