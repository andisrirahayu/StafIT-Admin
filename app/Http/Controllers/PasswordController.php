<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function updatePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'old-password' => 'required',
            'new-password' => 'required|min:8|confirmed',
        ]);

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Periksa password lama
        if (!Hash::check($request->input('old-password'), $user->password)) {
            return back()->withErrors(['old-password' => 'Password lama tidak sesuai']);
        }

        // Update password baru
        $user->password = Hash::make($request->input('new-password'));
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('profil')->with('status', 'Password berhasil diperbarui!');
    }
}
