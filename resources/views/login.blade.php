<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Login Staf IT</title>
    <link rel="stylesheet" href="CSS/registrasiLogin.css">
</head>
<body>
    <div class="header">
        <h1>Staf IT</h1>
    </div>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" width="100">
        </div>

        <!-- Tampilkan Pesan Flash -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" name="employee_id" placeholder="ID Pegawai" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
            <a href="#" class="forgot-password">Lupa Password?</a>
        </form>
    </div>
</body>
</html>
