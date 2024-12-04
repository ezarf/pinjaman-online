<?php
session_start();
?>
<nav class="navbar">
    <div class="container">
        <a href="/project/">Pinjaman Uang</a>
        <div>
            <?php if (isset($_SESSION['user'])): ?>
                <a href="<?= $_SESSION['user']['role'] === 'admin' ? '/project/admin/dashboard.php' : '/project/user/dashboard.php'; ?>">Dashboard</a>
                <a href="/project/logout.php">Logout</a>
            <?php else: ?>
                <a href="/project/login.php">Login</a>
                <a href="/project/register.php">Register</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<header>
    <h1>Pinjaman Uang</h1>
    <nav>
        <a href="./index.php">Beranda</a>
        <a href="./login.php">Login</a>
        <a href="./register.php">Daftar</a>
    </nav>
</header>
