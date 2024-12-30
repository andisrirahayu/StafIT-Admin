<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function showSubmenuForm()
    {
        return view('submenu'); // Mengembalikan view registrasi.blade.php
    }
}