<?php
// Mengatur koneksi ke database (sama dengan skrip sebelumnya)
include 'koneksi.php';

// Mengambil data dari formulir
$id_tagihan = $_POST['idt']; // ID tagihan yang akan diperbarui
$ta = $_POST['ta'];
$bulan_tagihan = $_POST['bulan'];
$tahun_tagihan = $_POST['tahun'];
$jumlah_tagihan = $_POST['jumlah'];

// Query untuk memperbarui data tagihan berdasarkan ID
$sql = "UPDATE tb_tagihan SET idta = '$ta', bulan_tagihan = '$bulan_tagihan', tahun_tagihan = '$tahun_tagihan', jumlah_tagihan = '$jumlah_tagihan' WHERE id_tagihan = $id_tagihan";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data tagihan berhasil diperbarui.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=tagihan.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>