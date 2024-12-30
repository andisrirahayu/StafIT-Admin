<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user(); // Ambil data pengguna yang login
        return view('profil', compact('user')); // Kirim data ke tampilan
    }
}
