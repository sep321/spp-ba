<?php
// Pastikan Anda sudah terhubung ke database
include 'koneksi.php';

// Ambil data dari form
$ta = $_POST['ta'];

// Persiapkan query SQL untuk menyimpan data ke tabel kelas
$sql = "INSERT INTO tb_ta (ta) VALUES ('$ta')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data tahun ajaran berhasil disimpan.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=tahunA.php'>";
} else {
    echo "Terjadi kesalahan: " . $koneksi->error;
}

// Tutup koneksi ke database
$koneksi->close();
?>