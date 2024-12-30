<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Registrasi Staf IT</title>
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
        <form action="{{ route('registrasi.store') }}" method="POST">
    @csrf
    <input type="text" name="full_name" placeholder="Nama Lengkap" required>
    <input type="text" name="employee_id" placeholder="ID Pegawai" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone_number" placeholder="Nomor Telepon" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
    <button type="submit">Registrasi</button>
</form>

    </div>
</body>
</html>
