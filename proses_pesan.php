<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $namaLengkap = $_POST["fullname"];
    $email = $_POST["email"];
    $nomorTelepon = $_POST["phone"];
    $pesan = $_POST["pesan"];

    // Query SQL untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO pesan_pengunjung_baru (nama_lengkap, email, nomor_telepon, pesan) VALUES ('$namaLengkap', '$email', '$nomorTelepon', '$pesan')";

    // Eksekusi query
    if ($koneksi->query($sql) === TRUE) {
        // Tampilkan pop-up
        echo '<script>alert("Terima kasih atas masukkan Anda!");</script>';
        // Arahkan ke halaman index.html setelah menutup pop-up
        echo '<script>window.location.href = "index.html";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
