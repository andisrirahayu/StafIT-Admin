<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogLaporanKejadian extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit
    protected $table = 'log_laporan_kejadian'; 

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = ['tanggal', 'waktu', 'lokasi', 'deskripsi', 'gambar', 'status'];

    
}
