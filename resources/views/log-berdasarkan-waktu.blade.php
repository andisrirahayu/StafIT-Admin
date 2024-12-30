<!-- log-berdasarkan-waktu.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Berdasarkan Waktu</title>
    <link rel="stylesheet" href="CSS/logWaktuTanggal.css">
</head>
<body>
    <!-- Submenu -->
    <div class="menu-bar">
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
        <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
        <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
    </div>

    <!-- Logo and Title -->
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" class="logo-img">
        </div>
        <h1 class="title">Log Berdasarkan Waktu</h1>
    </div>

    <!-- Menampilkan Daftar Laporan Kejadian Berdasarkan Waktu -->
    <div class="log-cards">
        @foreach($laporanKejadians as $laporan)
            <div class="log-card">
                <h3>{{ $laporan->waktu }}</h3>
                <!-- <p><strong>Tanggal:</strong> {{ $laporan->tanggal }}</p> -->
                <p><strong>Ruangan:</strong> {{ $laporan->lokasi }}</p>
                <p><strong>Deskripsi:</strong> {{ $laporan->deskripsi }}</p>
                <p><strong>Status:</strong> {{ $laporan->status }}</p>

                @if($laporan->gambar) <!-- Cek apakah gambar ada -->
                    <img src="{{ asset($laporan->gambar) }}" alt="Gambar Laporan" width="100">
                @else
                    <p>Tidak ada gambar</p>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 SiSatu. All rights reserved.</p>
        <p>Alamat: Jl. Pemuda No.6, Parepare, Indonesia</p>
        <p>Email: info@sisatu.com</p>
    </footer>
</body>
</html>
