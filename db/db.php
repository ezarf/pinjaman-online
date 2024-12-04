
<?php
// Informasi koneksi database
$host = 'localhost';       // Nama host (default: localhost)
$user = 'root';            // Username database (default: root untuk XAMPP)
$pass = '';                // Password database (kosong untuk XAMPP default)
$db_name = 'pinjol';  // Nama database

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
?>
