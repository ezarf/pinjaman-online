<?php
session_start();
include '../templates/auth.php';
include '../templates/header.php';
include '../db/db.php';

if ($_SESSION['role'] !== 'user') {
    header('Location: ../admin/dashboard.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$loans = $conn->query("SELECT * FROM loans WHERE user_id = $user_id ORDER BY created_at DESC");
?>
<div class="container">
    <h1>Riwayat Pinjaman</h1>
    <table>
        <thead>
            <tr>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($loan = $loans->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($loan['amount']); ?></td>
                    <td><?= htmlspecialchars($loan['status']); ?></td>
                    <td><?= htmlspecialchars($loan['created_at']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
