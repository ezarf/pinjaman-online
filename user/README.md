# Sistem Pinjaman Uang

## Deskripsi
Proyek ini adalah aplikasi sederhana untuk mengelola pinjaman uang, dengan dua peran:
1. **Admin:** Mengelola data pengguna dan pinjaman.
2. **User:** Mengajukan pinjaman dan melihat riwayat pinjaman.

## Teknologi yang Digunakan
- **PHP:** Backend.
- **MySQL:** Database.
- **HTML + CSS:** Frontend (Responsif dengan CSS).
- **Prepared Statements:** Keamanan database.

## Struktur Folder

## Fitur Utama
1. **Autentikasi**
   - Register: Dengan validasi dan hashing password.
   - Login: Session-based login dengan redirect sesuai role.
   - Logout: Hapus session pengguna.

2. **CRUD Pinjaman**
   - Admin dapat membuat, membaca, memperbarui, dan menghapus data pinjaman.
   - Validasi input dan pengalihan halaman otomatis.

3. **Manajemen Hak Akses**
   - Admin: Akses penuh ke semua data.
   - User: Akses hanya ke data pribadi.

4. **Responsif**
   - Desain responsif untuk desktop, tablet, dan mobile.

## Instalasi
1. Clone proyek ini atau salin file ke folder server lokal Anda (XAMPP/LAMP).
2. Buat database MySQL baru dan import file `db/database.sql`.
3. Konfigurasi koneksi database di `config/db.php`.
4. Jalankan server lokal Anda dan akses melalui browser.

## Catatan Tambahan
- **Keamanan**: Menggunakan prepared statements untuk mencegah SQL Injection.
- **Session Management**: Mengelola login pengguna berdasarkan role dengan session PHP.
- **Responsiveness**: Mendukung berbagai perangkat.

## Flowchart dan Use Case
- **Flowchart:** Tergambar dalam file `/documentation/flowchart.png`.
- **Use Case Diagram:** Tergambar dalam file `/documentation/use_case.png`.
