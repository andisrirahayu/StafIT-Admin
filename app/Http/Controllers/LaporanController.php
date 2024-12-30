<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogLaporanKejadian;

class LaporanController extends Controller
{
    public function index()
    {
        return view('cek-laporan');  // Menampilkan tampilan dengan menu pilihan
    }
    // Menampilkan data laporan
    public function cekLaporan()
    {
        
        $laporan = LogLaporanKejadian::all(); // Ambil semua data dari tabel
        return view('cek-laporan-kejadian', compact('laporan'));
    }

    // Tandai laporan sebagai Diatasi
    public function tandaiDiatasi($id)
    {
        $laporan = LogLaporanKejadian::findOrFail($id);
        $laporan->status = 'Diatasi'; // Ubah status menjadi Diatasi
        $laporan->save();

        return redirect()->back()->with('success', 'Laporan berhasil ditandai sebagai diatasi.');
    }

    // Minta bantuan Satpam
    public function mintaBantuan($id)
    {
        $laporan = LogLaporanKejadian::findOrFail($id);
        // Log tambahan jika diperlukan
        $laporan->save();

        return redirect()->back()->with('success', 'Permintaan bantuan Satpam berhasil dikirim.');
    }

    public function tandaiSelesai($id)
{
    // Temukan laporan berdasarkan ID
    $laporan = LogLaporanKejadian::findOrFail($id);

    // Jika status laporan adalah 'Diatasi', ubah menjadi 'Selesai'
    if ($laporan->status === 'Diatasi') {
        $laporan->status = 'Selesai';  // Ubah status menjadi 'Selesai'
        $laporan->save();  // Simpan perubahan ke database

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Laporan berhasil ditandai sebagai selesai.');
    }

    // Jika status tidak sesuai, beri informasi
    return redirect()->back()->with('info', 'Laporan status tidak dapat diubah.');
}

}
