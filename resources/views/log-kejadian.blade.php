<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Log Kejadian Staf IT</title>
    <link rel="stylesheet" href="CSS/log-kejadian.css">

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
        <h1 class="title">Log Kejadian</h1>
    </div>

    <!-- Log Entries -->
    <div class="content">
        <div class="log-entry">
            <span class="log-title">Log Laporan Kejadian</span>
            <a href="{{ route('log-laporan-kejadian') }}" class="lihat-btn">Lihat</a>
        </div>
        <div class="log-entry">
            <span class="log-title">Log Berdasarkan Tanggal</span>
            <a href="{{ route('log-berdasarkan-tanggal') }}" class="lihat-btn">Lihat</a>
        </div>
        <div class="log-entry">
            <span class="log-title">Log Berdasarkan Waktu</span>
            <a href="{{ route('log-berdasarkan-waktu') }}" class="lihat-btn">Lihat</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 SiSatu. All rights reserved.</p>
        <p>Alamat: Jl. Pemuda No.6, Parepare, Indonesia</p>
        <p>Email: info@sisatu.com</p>
    </footer>
</body>
</html>
