<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Registration;

class DashboardChartController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function data()
    {
        $berita = Berita::selectRaw('DATE(publish_date) as tanggal, COUNT(*) as total')
                        ->groupBy('tanggal')
                        ->orderBy('tanggal')
                        ->get();

        $registrasi = Registration::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
                                  ->groupBy('tanggal')
                                  ->orderBy('tanggal')
                                  ->get();

        $tanggalGabung = collect($berita)->pluck('tanggal')
            ->merge(collect($registrasi)->pluck('tanggal'))
            ->unique()->sort()->values();

        return response()->json([
            'labels' => $tanggalGabung,
            'berita' => $tanggalGabung->map(
                fn($tgl) => $berita->firstWhere('tanggal', $tgl)->total ?? 0
            ),
            'registrasi' => $tanggalGabung->map(
                fn($tgl) => $registrasi->firstWhere('tanggal', $tgl)->total ?? 0
            ),
        ]);
    }
}
