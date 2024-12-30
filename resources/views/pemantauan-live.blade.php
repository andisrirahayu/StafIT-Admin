<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemantauan Live</title>
    <link rel="stylesheet" href="{{ asset('CSS/pemantauanLive.css') }}">
</head>
<body>
    <!-- Submenu -->
    <div class="menu-bar">
        <a href="{{ route('profil') }}">Profil</a>
        <a href="{{ route('log-kejadian') }}">Log Kejadian</a>
        <a href="{{ route('pemantauan-live') }}">Simulasi Pemantauan</a>
        <a href="{{ route('cek-laporan') }}">Cek Laporan</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="header">
            <img src="{{ asset('images/logo SiSatu.png') }}" alt="Logo SiSatu" class="logo" style="width: 70px; height: auto;">
            <span>Pemantauan Live</span>
        </div>

        <!-- Video Streams -->
        <div class="video-streams">
            <!-- Video 1 -->
            <div class="video-container">
                <h2 style="color: black;">Ruangan 1</h2>
                <img src="http://127.0.0.1:5000/stream-video/data2" alt="Video Stream 1" style="width: 50%; height: auto;">
                <div id="alert-data2" class="alert" style="display:none; color: red;">
                    Kelas di ruang Data2 tidak kondusif!
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-container">
                <h2 style="color: black;">Ruangan 2</h2>
                <img src="http://127.0.0.1:5000/stream-video/data3" alt="Video Stream 2" style="width: 50%; height: auto;">
                <div id="alert-data3" class="alert" style="display:none; color: red;">
                    Kelas di ruang Data3 tidak kondusif!
                </div>
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

    <script>
        // Fungsi untuk menampilkan pemberitahuan jika jumlah anomali lebih banyak daripada normal
        function checkClassCondition(videoId, anomalyCount, normalCount) {
            if (anomalyCount > normalCount) {
                // Menampilkan pemberitahuan "kelas tidak kondusif"
                document.getElementById(`alert-${videoId}`).style.display = 'block';
            }
        }

        // Fungsi untuk update jumlah objek dan kondisi
        function updateVideoData(videoId, normalCount, anomalyCount) {
            document.getElementById(`normal-${videoId}`).innerText = normalCount;
            document.getElementById(`anomaly-${videoId}`).innerText = anomalyCount;
            checkClassCondition(videoId, anomalyCount, normalCount);
        }

        // Mengambil data jumlah objek dari server
        fetch('http://127.0.0.1:5000/stream-video/data2')
            .then(response => response.json())
            .then(data => {
                updateVideoData('data2', data.normalCount, data.anomalyCount);
            });

        fetch('http://127.0.0.1:5000/stream-video/data3')
            .then(response => response.json())
            .then(data => {
                updateVideoData('data3', data.normalCount, data.anomalyCount);
            });
    </script>
</body>
</html>
