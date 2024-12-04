<?php
include '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, 'user')");
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: ./login.php");
        exit();
    } else {
        $error = "Gagal mendaftar. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Pinjaman Uang</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    
    <main>
        <h1>Daftar</h1>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </main>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
