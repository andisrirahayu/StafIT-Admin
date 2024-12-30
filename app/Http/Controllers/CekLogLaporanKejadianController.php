<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogLaporanKejadian;

class CekLogLaporanKejadianController extends Controller
{
    public function showCekLogLaporanKejadianForm()
    {
        return view('cek-log-laporan-kejadian'); // Mengembalikan view registrasi.blade.php
    }

    public function index()
{
    $logLaporan = LogLaporanKejadian::all();  // Ambil semua data log laporan
    return view('cek-log-laporan-kejadian', compact('logLaporan'));
}

}