<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Cek Laporan Kejadian</title>
    <link rel="stylesheet" href="CSS/cek-laporan-kejadian.css">
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
        <h1 class="title">Cek Laporan Kejadian</h1>
    </div>

    <!-- Konten Utama -->
    <div class="container">

        <!-- Loop data dari database -->
        @foreach ($laporan as $item)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $item->deskripsi }}</h5>
                <p>Lokasi: {{ $item->lokasi }}</p>
                <p>Tanggal: {{ $item->tanggal }} | Waktu: {{ $item->waktu }}</p>
                
                <!-- Status -->
                <span class="status {{ strtolower(str_replace(' ', '-', $item->status)) }}">
                    Status: {{ $item->status }}
                </span>

                <!-- Logika Tampilan Berdasarkan Status -->
                @if ($item->status === 'Masih Ditangani')
                    <a href="{{ route('laporan.bantuan', $item->id) }}" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi bantuan Satpam?')">
                        🚨 Konfirmasi Bantuan Satpam
                    </a>
                    <a href="{{ route('laporan.diatasi', $item->id) }}" class="btn btn-success" >
                        ✔ Tandai Selesai
                    </a>
                    @elseif ($item->status === 'Diatasi')
                <!-- Status Diatasi dan tombol untuk tandai selesai lagi -->
                <!-- <span class="btn btn-secondary disabled">✔ Diatasi </span> -->
                
                <!-- Tambahkan tombol "Tandai Selesai" untuk status Diatasi -->
                <a href="{{ route('laporan.selesai', $item->id) }}" class="btn btn-warning">
                    ✔ Tandai Selesai
                </a>
            @endif
        </div>
    </div>
@endforeach

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
