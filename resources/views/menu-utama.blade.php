<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiSatu - Sistem Identifikasi dan Surveillance</title>
    <link rel="stylesheet" href="CSS/menu-utama.css">
</head>
<body>
    <button class="hamburger" onclick="toggleMenu()">&#9776;</button> 
    <div class="logo">
        <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu"> 
    </div>
    <p class="combined-title">
        Sistem Identifikasi dan <span class="yellow-text">Surveillance untuk Tindakan Urgent</span>
    </p>
    <div class="menu-items">
        <!-- <button>Registrasi</button> -->
        <a href="{{ route('registrasi') }}"><button>Registrasi</button></a> 
        <a href="{{ route('login') }}"><button>Login</button></a> 
        <!-- <button>Login</button> -->
    </div>
    <script>
        function toggleMenu() {
            const menuItems = document.querySelector('.menu-items');
            menuItems.classList.toggle('active'); 
        }
    </script>
</body>
</html>