<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Cek Log Laporan Kejadian</title>
    <link rel="stylesheet" href="CSS/cek-log-laporan-kejadian.css">
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
        <h1 class="title">Cek Log Laporan Kejadian</h1>
    </div>

    <div class="log-laporan-container">
    @foreach($logLaporan as $laporan)
        <div class="laporan-item">
            <div class="laporan-content">
                <!-- Tanggal dan Jam -->
                <span class="laporan-date-time">Pada tanggal {{ $laporan->tanggal }} Tepat Pukul {{ $laporan->waktu }}</span>
                <!-- Lokasi Ruangan -->
                <span class="laporan-ruangan">di {{ $laporan->lokasi }}</span>
                <!-- Deskripsi -->
                <span class="laporan-deskripsi">Telah {{ $laporan->deskripsi }}</span>
                <!-- Tombol Status -->
                <button class="status-btn 
                    @if($laporan->status == 'Selesai') selesai 
                    @elseif($laporan->status == 'Diatasi') diatasi
                    @elseif($laporan->status == 'Masih Ditangani') masih-ditangani
                    @endif" 
                @if($laporan->status == 'Selesai') disabled @endif>
                    {{ $laporan->status }}
                </button>
            </div>
        </div>
    @endforeach
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
