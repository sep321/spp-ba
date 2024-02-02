<?php
// Menghubungkan ke database (gantilah dengan informasi koneksi database Anda)
include 'koneksi.php';

// Mengambil data yang akan diupdate dari formulir
$id_kelas = $_POST['idk'];
$nama_kelas = $_POST['namaKelas'];

// Query SQL untuk melakukan update
$sql = "UPDATE tb_kelas SET nama_kelas = '$nama_kelas' WHERE id_kelas = $id_kelas";

if (mysqli_query($koneksi, $sql)) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data kelas berhasil diupdate.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=kelas.php'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
?>