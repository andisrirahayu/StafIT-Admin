<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LogLaporanKejadian;

class LogLaporanKejadianSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama
        LogLaporanKejadian::truncate();

        // Data dummy
        LogLaporanKejadian::create([
            'tanggal' => '2024-12-01',
            'waktu' => '10:00',
            'lokasi' => 'Ruangan 203',
            'deskripsi' => 'Terjadi pelanggaran',
            'gambar' => 'images/pelanggaran.jpg',
            'status' => 'Masih Ditangani',
        ]);

        LogLaporanKejadian::create([
            'tanggal' => '2024-12-02',
            'waktu' => '14:30',
            'lokasi' => 'Ruangan 202',
            'deskripsi' => 'Terjadi perkelahian',
            'gambar' => 'images/perkelahian.jpg',
            'status' => 'Diatasi',
        ]);

        LogLaporanKejadian::create([
            'tanggal' => '2024-12-03',
            'waktu' => '09:00',
            'lokasi' => 'Ruangan 203',
            'deskripsi' => 'Terjadi kekerasan',
            'gambar' => 'images/kekerasan.jpg',
            'status' => 'Selesai',
        ]);

        LogLaporanKejadian::create([
            'tanggal' => '2024-12-03',
            'waktu' => '08:00',
            'lokasi' => 'Ruangan 202',
            'deskripsi' => 'Terjadi keributan',
            'gambar' => 'images/keributan.jpg',
            'status' => 'Diatasi',
        ]);

        LogLaporanKejadian::create([
            'tanggal' => '2024-12-03',
            'waktu' => '14:00',
            'lokasi' => 'Ruangan 203',
            'deskripsi' => 'Terjadi kriminalitas',
            'gambar' => 'images/kriminalitas.jpg',
            'status' => 'Masih Ditangani',
        ]);
    }
}
