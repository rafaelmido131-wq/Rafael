<?php
// Memulai session
session_start();

// Simulasi koneksi database (Ganti dengan koneksi asli Anda jika sudah ada)
/*
$conn = mysqli_connect("localhost", "root", "", "nama_database");
*/

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi sederhana (Ganti dengan query database)
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php"); // Ganti ke halaman setelah login
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Perpustakaan Digital</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
            text-align: left;
        }
        .header-icon {
            background-color: #2e7d32;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header-icon img {
            width: 50px;
        }
        h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        p.subtitle {
            color: #777;
            margin-bottom: 25px;
            font-size: 14px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #333;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }
        .btn-login {
            background-color: #f1f1f1;
            border: 2px solid #333;
            padding: 12px 25px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s;
        }
        .btn-login:hover {
            background-color: #e0e0e0;
        }
        .link-member {
            color: #2e7d32;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .error-msg {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="header-icon">
        <img src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" alt="Admin Icon">
    </div>

    <h2>Login Admin</h2>
    <p class="subtitle">Aplikasi Perpustakaan Digital Sekolah</p>

    <?php if($error): ?>
        <p class="error-msg"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <div class="input-group">
            <input type="text" name="username" placeholder="Masukkan Username" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Masukkan Password" required>
        </div>

        <div class="form-footer">
            <a href="login-member.php" class="link-member">Login sebagai Anggota?</a>
            <button type="submit" name="login" class="btn-login">Login Sekarang</button>
        </div>
    </form>
</div>

</body>
</html>
