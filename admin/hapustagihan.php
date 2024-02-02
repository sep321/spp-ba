<?php
// Konfigurasi koneksi database
include 'koneksi.php';

// Mendapatkan ID kelas yang akan dihapus
$id_tagihan = $_GET['id']; // Anda dapat menggunakan metode lain untuk mendapatkan ID ini

// Membuat query SQL untuk menghapus data
$sql = "DELETE FROM tb_tagihan WHERE id_tagihan = $id_tagihan";

// Menjalankan query untuk menghapus data
if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data tagihan berhasil dihapus.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=tagihan.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Menutup koneksi database
$koneksi->close();
?>