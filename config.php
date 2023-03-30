<?php
// Konfigurasi database
$databaseHost = 'localhost';
$databaseName = 'koperasi';
$databaseUsername = 'root';
$databasePassword = '';

// Membuat koneksi ke database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Mengecek koneksi
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
