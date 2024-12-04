<?php
session_start();
include '../templates/auth.php';

include '../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO loans (user_id, amount) VALUES (?, ?)");
    $stmt->bind_param("id", $user_id, $amount);

    if ($stmt->execute()) {
        header("Location: loan_history.php");
        exit();
    } else {
        $error = "Gagal mengajukan pinjaman.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Pinjaman</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include '../templates/header.php'; ?>
    
    <main>
        <h1>Ajukan Pinjaman</h1>
        <form action="" method="POST">
            <input type="number" name="amount" placeholder="Jumlah Pinjaman" required>
            <button type="submit">Ajukan</button>
        </form>
        <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    </main>

    <?php include '../templates/footer.php'; ?>
</body>
</html>
