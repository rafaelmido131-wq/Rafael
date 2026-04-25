<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Background gradasi biru seperti pada gambar */
            background: linear-gradient(180deg, #7da1f7 0%, #bbd2ff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-title {
            color: white;
            text-align: center;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            text-transform: uppercase;
        }

        .card-container {
            width: 90%;
            max-width: 400px;
        }

        .custom-card {
            background-color: white;
            border-radius: 25px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border: none;
        }

        .icon-img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            object-fit: contain;
        }

        .role-title {
            font-weight: 800;
            color: #000;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .role-desc {
            color: #333;
            font-size: 0.95rem;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        .login-link {
            font-weight: bold;
            color: #0000FF;
            text-decoration: underline;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .footer {
            margin-top: auto;
            padding-bottom: 20px;
            color: #333;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <div class="header-title">
        <h2 class="mb-0">📓 PERPUSTAKAAN</h2>
        <h2>DIGITAL SEKOLAH</h2>
    </div>

    <div class="card-container">
        
        <div class="custom-card">
            <img src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" alt="Admin" class="icon-img">
            <div class="role-title">ADMIN</div>
            <p class="role-desc">Kelola buku, anggota, dan transaksi perpustakaan.</p>
            <a href="login_admin.php" class="login-link">LOGIN ADMIN</a>
        </div>

        <div class="custom-card">
            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" alt="Anggota" class="icon-img">
            <div class="role-title">ANGGOTA</div>
            <p class="role-desc">Cari buku favoritmu dan lihat history peminjaman.</p>
            <a href="login_anggota.php" class="login-link">LOGIN ANGGOTA</a>
        </div>

    </div>

    <div class="footer">
        © 2026 Aplikasi Perpustakaan Digital
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
