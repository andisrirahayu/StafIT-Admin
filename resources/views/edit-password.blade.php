<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password - SiSatu</title>
    <link rel="stylesheet" href="CSS/editPassword.css">
</head>
<body>
    <!-- Menu Bar -->
    <div class="menu-bar">
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
        <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
        <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="title">Edit Password</div>

        <!-- Notifikasi Sukses/Error -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('update-password') }}">
            @csrf
            <div class="form-group">
                <label for="old-password">Password Lama</label>
                <input type="password" id="old-password" name="old-password" required>
            </div>
            <div class="form-group">
                <label for="new-password">Password Baru</label>
                <input type="password" id="new-password" name="new-password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Konfirmasi Password</label>
                <input type="password" id="confirm-password" name="new-password_confirmation" required>
            </div>
            <button type="submit" class="update-button">Update Password</button>
        </form>
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
