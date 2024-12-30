<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Menu Staf IT</title>
    <link rel="stylesheet" href="CSS/submenu-staf-it.css">
</head>
<body>
    <div class="container">
        <div class="menu-bar">
            <a href="{{ route('profil') }}">Profil</a>
            <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
            <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
            <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
        </div>
        <div class="logo">
            <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" width="100">
        </div>
        <p class="combined-title">
            Sistem Identifikasi dan <span class="yellow-text">Surveillance untuk Tindakan Urgent</span>
        </p>
    </div>

    <!-- Footer section -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 SiSatu. Semua hak dilindungi.</p>
            <p>Alamat: Jl. Balai Kota No.1, Parepare, Indonesia</p>
            <p>Email: info@sisatu.com</p>
        </div>
    </footer>
</body>
</html>
