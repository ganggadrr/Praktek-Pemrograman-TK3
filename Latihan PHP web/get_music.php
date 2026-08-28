<?php
include "koneksi.php";

// Mengambil data music terbaru dari database
$queryMusic = mysqli_query(
    $koneksi,
    "SELECT * FROM music ORDER BY ID ASC"
);

// Mengecek apakah query berhasil
if (!$queryMusic) {
    die("Query Music gagal: " . mysqli_error($koneksi));
}

$data = [];

while ($music = mysqli_fetch_assoc($queryMusic)) {
    $data[] = $music;
}

header('Content-Type: application/json');
echo json_encode($data);
?>