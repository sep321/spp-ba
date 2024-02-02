<?php
// Koneksi ke database
include 'koneksi.php';

// Ambil data dari formulir
$id_siswa = $_POST['ids']; // Anda harus memiliki ID siswa yang akan diperbarui
$nama_siswa = $_POST['nama'];
$ta = $_POST['ta'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$tanggal_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nomor_hp'];
$email = $_POST['email'];

// Proses upload gambar (opsional, hanya jika ingin mengganti gambar)
if ($_FILES['foto']['tmp_name'] != '') {
    $gambar_nama = $_FILES['foto']['name'];
    $gambar_tmp = $_FILES['foto']['tmp_name'];
    $gambar_path = "siswa/" . $gambar_nama;
    
    move_uploaded_file($gambar_tmp, $gambar_path);
    
    // Query untuk update data siswa beserta gambar baru
    $sql = "UPDATE tb_siswa SET ta_id='$ta', nama_siswa='$nama_siswa', nisn='$nisn', kelas='$kelas', tanggal_lahir='$tanggal_lahir', alamat='$alamat', nohp='$nohp', email='$email', foto_siswa='$gambar_path' WHERE id_siswa=$id_siswa";
} else {
    // Query untuk update data siswa tanpa mengganti gambar
    $sql = "UPDATE tb_siswa SET ta_id='$ta', nama_siswa='$nama_siswa', nisn='$nisn', kelas='$kelas', tanggal_lahir='$tanggal_lahir', alamat='$alamat', nohp='$nohp', email='$email' WHERE id_siswa=$id_siswa";
}

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data siswa berhasil diperbarui");</script>';
    echo "<meta http-equiv='refresh' content='0; url=siswa.php?tahun_ajaran=$ta'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>