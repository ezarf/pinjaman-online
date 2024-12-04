<?php
include '../templates/auth.php';
include '../templates/header.php';
include '../db/db.php';

if ($_SESSION['role'] !== 'admin') {
    header('Location: ../user/dashboard.php');
    exit;
}

// Menampilkan semua pinjaman
$loans = $conn->query("SELECT loans.*, users.name AS user_name FROM loans JOIN users ON loans.user_id = users.id");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loan_id = intval($_POST['loan_id']);
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE loans SET status = ? WHERE id = ?");
    $stmt->bind_param('si', $status, $loan_id);

    if ($stmt->execute()) {
        header('Location: loans.php');
        exit;
    }
}
?>
<div class="container">
    <h1>Kelola Pinjaman</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($loan = $loans->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($loan['user_name']) ?></td>
                    <td><?= htmlspecialchars($loan['amount']) ?></td>
                    <td><?= htmlspecialchars($loan['status']) ?></td>
                    <td>
                        <form method="POST" style="display: inline-block;">
                            <input type="hidden" name="loan_id" value="<?= $loan['id'] ?>">
                            <select name="status" required>
                                <option value="pending" <?= $loan['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                <option value="approved" <?= $loan['status'] === 'approved' ? 'selected' : '' ?>>Approved</option>
                                <option value="rejected" <?= $loan['status'] === 'rejected' ? 'selected' : '' ?>>Rejected</option>
                            </select>
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
