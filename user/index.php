<?php
include 'config/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Uang</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    
    <main>
        <h1>Selamat datang di aplikasi Pinjaman Uang</h1>
        <p>Silakan login untuk melanjutkan.</p>
        <a href="./login.php">Login</a> | <a href="./register.php">Daftar</a>
    </main>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
<STyle>
    /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background: linear-gradient(135deg, #1d3557, #457b9d);
  color: #f1faee;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

h1, p {
  text-align: center;
}

/* Header */
header {
  background-color: #1d3557;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

header h1 {
  font-size: 24px;
  color: #f1faee;
}

header nav a {
  text-decoration: none;
  color: #f1faee;
  margin: 0 15px;
  position: relative;
  transition: color 0.3s ease;
}

header nav a:hover {
  color: #a8dadc;
}

header nav a::after {
  content: "";
  position: absolute;
  width: 0%;
  height: 2px;
  background: #a8dadc;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
  transition: width 0.3s ease;
}

header nav a:hover::after {
  width: 100%;
}

/* Main Content */
main {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
}

main h1 {
  font-size: 32px;
  margin-bottom: 20px;
  animation: fadeIn 1s ease-in-out;
}

main p {
  font-size: 18px;
  margin-bottom: 30px;
}

main a {
  text-decoration: none;
  color: #1d3557;
  background-color: #f1faee;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  transition: all 0.3s ease;
  margin: 0 10px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

main a:hover {
  background-color: #a8dadc;
  color: #1d3557;
  transform: translateY(-3px);
}

/* Footer */
footer {
  background-color: #1d3557;
  text-align: center;
  padding: 15px;
  color: #f1faee;
  font-size: 14px;
}

/* Animations */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

</STyle>