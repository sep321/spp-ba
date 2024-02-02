<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data dari formulir
$nama_siswa = $_POST['nama'];
$ta = $_POST['ta'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$tanggal_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nomor_hp'];
$email = $_POST['email'];

// Proses upload gambar
$gambar_nama = $_FILES['foto']['name'];
$gambar_tmp = $_FILES['foto']['tmp_name'];
$gambar_path = "siswa/" . $gambar_nama;

move_uploaded_file($gambar_tmp, $gambar_path);

// Query untuk menyimpan data siswa
$sql = "INSERT INTO tb_siswa (ta_id, nama_siswa, nisn, kelas, tanggal_lahir, alamat, nohp, email, foto_siswa) 
        VALUES ('$ta', '$nama_siswa', '$nisn', '$kelas', '$tanggal_lahir', '$alamat', '$nohp', '$email', '$gambar_path')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data siswa berhasil disimpan.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=siswa.php?tahun_ajaran=$ta'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>