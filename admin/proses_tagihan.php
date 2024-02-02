<?php
// Mengatur koneksi ke database
include 'koneksi.php';

// Mengambil data dari formulir
$ta = $_POST['ta'];
$bulan_tagihan = $_POST['bulan'];
$tahun_tagihan = $_POST['tahun'];
$jumlah_tagihan = $_POST['jumlah'];

// Query untuk menyimpan data tagihan
$sql = "INSERT INTO tb_tagihan (idta, bulan_tagihan, tahun_tagihan, jumlah_tagihan) VALUES ('$ta', '$bulan_tagihan', '$tahun_tagihan', '$jumlah_tagihan')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data tagihan berhasil disimpan.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=tagihan.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>