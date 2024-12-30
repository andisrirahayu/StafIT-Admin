<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registrasi'); // Mengembalikan view registrasi.blade.php
    }

    public function registrasi(Request $request)
    {
        // Validasi inputan dari form
        $request->validate([
            'full_name' => 'required|string|max:255',
            'employee_id' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|min:6|confirmed', // Menggunakan konfirmasi kata sandi
        ]);

        // Menyimpan data pengguna ke database
        User::create([
            'full_name' => $request->full_name,
            'employee_id' => $request->employee_id,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Mengirim respons sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }
}