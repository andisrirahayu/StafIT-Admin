<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekLaporanKejadianController extends Controller
{
    public function showCekLaporanKejadianForm()
    {
        return view('cek-laporan-kejadian'); // Mengembalikan view registrasi.blade.php
    }
}