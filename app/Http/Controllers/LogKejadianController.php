<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogKejadianController extends Controller
{
    public function showLogKejadianForm()
    {
        return view('log-kejadian'); // Mengembalikan view registrasi.blade.php
    }
}