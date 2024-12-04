<?php
session_start();
include '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['login'] = true;
            header("Location: " . ($user['role'] == 'admin' ? '../admin/dashboard.php' : './dashboard.php'));
            exit();
        } else {
            echo "Email atau password salah!";
        }
    } else {
        echo "Pengguna tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pinjaman Uang</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    
    <main>
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </main>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
