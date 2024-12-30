<?php

namespace App\Http\Controllers;

use App\Models\LogLaporanKejadian;
use Illuminate\Http\Request;

class LogLaporanKejadianController extends Controller
{
    // Menampilkan halaman utama Log Kejadian (menu pilihan)
    public function index()
    {
        return view('log-kejadian');  // Menampilkan tampilan dengan menu pilihan
    }

    // Menampilkan daftar laporan kejadian
    public function laporanKejadian()
    {
        // Mengambil semua laporan kejadian dari database
        $laporanKejadians = LogLaporanKejadian::all();

        // Menampilkan laporan kejadian di view
        return view('log-laporan-kejadian', compact('laporanKejadians'));
    }

    // Memperbarui status laporan kejadian
    public function update(Request $request, $id)
    {
        // Validasi input status
        $request->validate([
            'status' => 'required|string',
        ]);

        // Mengambil laporan kejadian berdasarkan ID
        $laporanKejadian = LogLaporanKejadian::findOrFail($id);

        // Memperbarui status laporan kejadian
        $laporanKejadian->update([
            'status' => $request->status,
        ]);

        // Mengalihkan kembali ke halaman daftar laporan dengan pesan sukses
        return redirect()->route('log-laporan-kejadian')->with('success', 'Status laporan berhasil diperbarui.');
    }

    // Menampilkan laporan kejadian berdasarkan tanggal
    public function logBerdasarkanTanggal()
    {
        // Mengambil laporan kejadian berdasarkan tanggal (diurutkan dari yang terbaru)
        $laporanKejadians = LogLaporanKejadian::orderBy('tanggal', 'desc')->get();

        // Menampilkan laporan berdasarkan tanggal di view
        return view('log-berdasarkan-tanggal', compact('laporanKejadians'));
    }

    // Menampilkan laporan kejadian berdasarkan waktu
    public function logBerdasarkanWaktu()
    {
        // Mengambil laporan kejadian berdasarkan waktu (diurutkan dari yang terbaru)
        $laporanKejadians = LogLaporanKejadian::orderBy('waktu', 'desc')->get();

        // Menampilkan laporan berdasarkan waktu di view
        return view('log-berdasarkan-waktu', compact('laporanKejadians'));
    }
}
