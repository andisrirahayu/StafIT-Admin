<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekLaporanController extends Controller
{
    public function showCekLaporanForm()
    {
        return view('cek-laporan'); 
    }
}