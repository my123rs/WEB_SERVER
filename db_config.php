<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_client";

// Membuat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
// echo "Koneksi berhasil";
?>