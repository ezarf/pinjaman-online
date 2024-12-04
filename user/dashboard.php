<?php
include '../templates/auth.php';
include '../templates/header.php';
include '../db/db.php';

$user_id = $_SESSION['user']['id'];
$loans = $conn->query("SELECT * FROM loans WHERE user_id = $user_id ORDER BY created_at DESC");
?>
<div class="container">
    <h1>Dashboard User</h1>
    <p>Selamat datang, <?= htmlspecialchars($_SESSION['user']['name']); ?>!</p>
    <a href="loan_form.php" class="btn">Ajukan Pinjaman</a>
    <h2>Riwayat Pinjaman</h2>
    <table>
        <thead>
            <tr>
                <th>Jumlah</th>
                <th>Durasi</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($loan = $loans->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($loan['amount']); ?></td>
                    <td><?= htmlspecialchars($loan['duration']); ?> bulan</td>
                    <td><?= htmlspecialchars($loan['status']); ?></td>
                    <td><?= htmlspecialchars($loan['created_at']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
