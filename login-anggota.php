<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Anggota - Perpustakaan Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #1a374d; /* Warna background gelap sesuai header gambar */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 40px 30px;
            border-radius: 30px; /* Sudut melengkung besar */
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            text-align: left;
        }

        .avatar-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            background-color: #27ae60; /* Warna hijau lingkaran */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .avatar img {
            width: 60%;
            filter: invert(1); /* Membuat icon jadi putih jika perlu */
        }

        h2 {
            margin: 0;
            font-weight: 600;
            color: #333;
        }

        p.subtitle {
            color: #777;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 15px;
            outline: none;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        .login-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        button {
            padding: 15px 25px;
            background-color: #e0e0e0; /* Warna abu-abu tombol */
            border: 2px solid #000;
            border-radius: 15px;
            font-weight: bold;
            cursor: pointer;
            white-space: nowrap;
        }

        button:hover {
            background-color: #d0d0d0;
        }

        .footer-links {
            margin-top: 20px;
        }

        .footer-links a {
            display: block;
            text-decoration: none;
            color: #27ae60;
            font-size: 14px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="avatar-container">
        <div class="avatar">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="white">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>
    </div>

    <h2>Login Anggota</h2>
    <p class="subtitle">Aplikasi Perpustakaan Digital Sekolah</p>

    <form action="" method="POST">
        <div class="login-row">
            <div style="flex-grow: 1;">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Masukkan Password" required>
                </div>
            </div>
            <button type="submit" name="login">Login Sekarang</button>
        </div>
    </form>

    <div class="footer-links">
        <a href="login-admin.php"><span class="icon">💻</span> Login sebagai Admin</a>
        <a href="daftar-anggota.php"><span class="icon">👥</span> Daftar Anggota Baru</a>
    </div>
</div>

<?php
// Logika PHP Sederhana (Opsional)
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Contoh validasi sederhana
    if ($user == "admin" && $pass == "123") {
        echo "<script>alert('Login Berhasil!');</script>";
    } else {
        echo "<script>alert('Username atau Password Salah!');</script>";
    }
}
?>

</body>
</html>
