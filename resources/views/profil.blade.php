<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Staf IT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/profil.css">
</head>
<body>
    <div class="menu-bar">
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
        <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
        <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
    </div>

    <div class="main-container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" class="logo-img">
            </div>
            <h1 class="title">Profil Staf IT</h1>
        </div>

         <!-- Notifikasi Sukses/Error -->
         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="profile-box">
            <div class="description-box">
                <div class="profile-picture">
                    <i class="fas fa-user"></i>
                </div>
                <div class="profile-details">
                    <div class="profile-info">
                        <h2>{{ $user->full_name }}</h2>
                        <p>ID Pegawai: {{ $user->employee_id }}</p>
                        <p>Email: {{ $user->email }}</p>
                        <p>Nomor Telepon: {{ $user->phone_number }}</p>
                    </div>
                    <div class="buttons">
                        <!-- <a href="{{ route('edit-profil') }}">
                            <button><i class="fas fa-edit"></i> Edit Profil</button>
                        </a> -->
                        <a href="{{ route('edit-password') }}">
                            <button><i class="fas fa-cog"></i> Edit Password</button>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"><i class="fas fa-sign-out-alt"></i> Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 SiSatu. Semua hak dilindungi.</p>
            <p>Alamat: Jl. Pemuda No.6, Parepare, Indonesia</p>
            <p>Email: info@sisatu.com</p>
        </div>
    </footer>
</body>
</html>
