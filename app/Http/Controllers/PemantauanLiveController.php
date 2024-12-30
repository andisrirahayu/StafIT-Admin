<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemantauanLiveController extends Controller
{
    public function index()
    {
        // Kirimkan daftar video ke view
        $videos = ['data2.mp4', 'data3.mp4'];
        return view('pemantauan-live', compact('videos'));
    }
}
