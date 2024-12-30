<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogBerdasarkanWaktuController extends Controller
{
    public function showLogBerdasarkanWaktuForm()
    {
        return view('log-berdasarkan-waktu'); // Mengembalikan view registrasi.blade.php
    }
}