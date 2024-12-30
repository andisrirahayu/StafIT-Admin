<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function showPengaturanForm()
    {
        return view('pengaturan'); // Mengembalikan view registrasi.blade.php
    }
}