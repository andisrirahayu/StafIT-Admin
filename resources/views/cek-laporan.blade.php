<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Cek Laporan</title>
    <link rel="stylesheet" href="CSS/cekLaporan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Submenu -->
    <div class="menu-bar">
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
        <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
        <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
    </div>

    <!-- Header dan logo -->
    <div class="header">
        <div class="logo">
            <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" class="logo-img">
        </div>
        <h1 class="title">Cek Laporan</h1>
    </div>

    <!-- Kontainer pusat untuk laporan -->
    <div class="container">
        <div class="report-container">
            <div class="report-item">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="title"> Cek Laporan Kejadian</span>
                <a href="{{ route('cek-laporan-kejadian') }}" class="view-button">Lihat</a>
            </div>

            <div class="report-item">
                <span class="icon"><i class="fas fa-envelope"></i></span>
                <span class="title"> Cek Log Laporan Kejadian</span>
                <a href="{{ route('cek-log-laporan-kejadian') }}" class="view-button">Lihat</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 SiSatu. Semua hak dilindungi.</p>
            <p>Alamat: Jl. Pemuda No.6, Parepare, Indonesia</p>
            <p>Email: info@sisatu.com</p>
        </div>
    </footer>
</body>
</html>
