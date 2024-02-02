<?php
// Pastikan Anda sudah terhubung ke database
include 'koneksi.php';

// Ambil data dari form
$nama_kelas = $_POST['namaKelas'];

// Persiapkan query SQL untuk menyimpan data ke tabel kelas
$sql = "INSERT INTO tb_kelas (nama_kelas) VALUES ('$nama_kelas')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data kelas berhasil disimpan.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=kelas.php'>";
} else {
    echo "Terjadi kesalahan: " . $koneksi->error;
}

// Tutup koneksi ke database
$koneksi->close();
?>