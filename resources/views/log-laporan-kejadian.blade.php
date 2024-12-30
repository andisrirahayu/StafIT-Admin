<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Laporan Kejadian</title>
    <link rel="stylesheet" href="CSS/logLaporanKejadian.css">
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
        <h1 class="title">Log Laporan Kejadian</h1>
    </div>

    <!-- Menampilkan Daftar Laporan Kejadian -->
    <div class="table-container">
    <table border="1">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporanKejadians as $laporan)
            <tr>
                <td>{{ $laporan->tanggal }}</td>
                <td>{{ $laporan->waktu }}</td>
                <td>{{ $laporan->lokasi }}</td>
                <td>{{ $laporan->deskripsi }}</td>
                <td>{{ $laporan->status }}</td>
                <td>
                    @if($laporan->gambar) <!-- Cek apakah gambar ada -->
                        <img src="{{ asset($laporan->gambar) }}" alt="Gambar Laporan" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                </td>
                <td>
                    <!-- Form untuk mengupdate status laporan -->
                    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status">
                            <option value="Masih Ditangani" {{ $laporan->status == 'Masih Ditangani' ? 'selected' : '' }}>Masih Ditangani</option>
                            <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                            <option value="Diatasi" {{ $laporan->status == 'Diatasi' ? 'selected' : '' }}>Diatasi</option>
                        </select>
                        <button type="submit">Update Status</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 SiSatu. All rights reserved.</p>
        <p>Alamat: Jl. Pemuda No.6, Parepare, Indonesia</p>
        <p>Email: info@sisatu.com</p>
    </footer>
</body>
</html>
