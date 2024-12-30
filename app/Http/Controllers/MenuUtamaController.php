<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuUtamaController extends Controller
{
    public function showMenuUtamaForm()
    {
        return view('menu-utama'); // Mengembalikan view registrasi.blade.php
    }
}