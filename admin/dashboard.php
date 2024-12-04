<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header("Location: ../user/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../templates/header.php'; ?>
    
    <main>
        <h1>Selamat datang, Admin!</h1>
        <p>Kelola pinjaman dan pengguna di sini.</p>
        <a href="loans.php">Kelola Pinjaman</a> | <a href="users.php">Kelola Pengguna</a>
    </main>

    <?php include '../templates/footer.php'; ?>
</body>
</html>

