<?php
// Menghubungkan ke database (gantilah dengan informasi koneksi database Anda)
include 'koneksi.php';

// Mengambil data yang akan diupdate dari formulir
$id_a = $_POST['ida'];
$ta = $_POST['ta'];

// Query SQL untuk melakukan update
$sql = "UPDATE tb_ta SET ta = '$ta' WHERE id_ta = $id_a";

if (mysqli_query($koneksi, $sql)) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data tahun ajaran berhasil diupdate.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=tahunA.php'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>