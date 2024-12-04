<?php
session_start();
 include './templates/auth.php'
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../templates/header.php'; ?>
    
    <main>
        <h1>Selamat datang, User!</h1>
        <p>Ajukan pinjaman baru atau lihat riwayat pinjaman Anda.</p>
        <a href="loan_form.php">Ajukan Pinjaman</a> | <a href="loan_history.php">Riwayat Pinjaman</a>
    </main>

    <?php include '../templates/footer.php'; ?>

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h1>Login</h1>
      <p class="subtitle">to get started</p>
      <form action="../user/login.php" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <a href="#" class="forgot-password">Forgot Password?</a>
        <button type="submit" class="btn-primary">Continue</button>
      </form>
      <p class="register-link">New User? <a href="register.php">Register</a></p>
    </div>
  </div>
</body>
</html>
<link rel="stylesheet" href="../css/styles.css">
</body>
</html>
