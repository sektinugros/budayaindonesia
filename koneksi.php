<?php
// Konfigurasi koneksi database
$host = "localhost";  
$username = "root";  
$password = "";  
$database = "budaya"; 

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
