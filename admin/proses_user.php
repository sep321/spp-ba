<?php
include 'koneksi.php';

// Get data from form or input
$username = $_POST['username'];
$password = md5($_POST['password']); // Use md5 for password encryption
$nama_lengkap = $_POST['nama'];
$peran = $_POST['peran'];

// Insert data into tb_user
$sql = "INSERT INTO tb_user (username, password, nama_lengkap, peran) VALUES ('$username', '$password', '$nama_lengkap', '$peran')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Record inserted successfully");</script>';
    echo "<meta http-equiv='refresh' content='0; url=user.php'>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

// Close the database koneksi
$koneksi->close();
?>