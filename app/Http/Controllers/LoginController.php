<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan ini ditambahkan

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Mengembalikan view login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'employee_id' => 'required|string',
            'password' => 'required|string',
        ]);

        // Ambil data kredensial
        $credentials = $request->only('employee_id', 'password');

        // Cek apakah kredensial cocok
        if (Auth::attempt($credentials)) {
            // Login berhasil, arahkan ke halaman dashboard atau halaman lain
            return redirect()->route('submenu');
        }

        // Login gagal, kembali dengan error
        return redirect()->back()->withErrors([
            'login_error' => 'ID Pegawai atau Password salah.'
        ]);
    }
}
