<?php
$server = "localhost"; // Nama server MySQL
$username = "root"; // Username MySQL
$password = ""; // Password MySQL
$database = "20242021_3a2"; // Nama database
$koneksi = mysqli_connect( // Membuat koneksi ke database
    $server,
    $username,
    $password,
    $database
);

if (!$koneksi) { // Mengecek apakah koneksi berhasil
    die("Koneksi database gagal: " . mysqli_connect_error()); // Menampilkan pesan jika koneksi gagal
}
?>