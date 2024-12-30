<?php

namespace App\Http\Controllers;

use App\Models\LogBerdasarkanTanggal;
use Illuminate\Http\Request;

class LogBerdasarkanTanggalController extends Controller
{
    public function index(Request $request)
    {
        
        // Ambil data tanggal dari tabel log_berdasarkan_tanggal
        $dates = LogBerdasarkanTanggal::select('tanggal')->distinct()->get();
        
        // Jika ada tanggal yang dipilih, tampilkan log kejadian berdasarkan tanggal tersebut
        $logsForDate = null;
        if ($request->has('tanggal')) {
            $logsForDate = LogBerdasarkanTanggal::where('tanggal', $request->tanggal)->get();
        }

        return view('log-berdasarkan-tanggal', compact('dates', 'logsForDate'));
    }
}
