<?php
include 'koneksi.php';

// Get data from form or input
$user_id = $_POST['idu']; // Assuming you have a user_id to identify the user you want to update
$username = $_POST['username'];
$nama_lengkap = $_POST['nama'];
$peran = $_POST['peran'];

// Check if password is provided in the form
if(!empty($_POST['password'])) {
    // Update password using md5 encryption
    $password = md5($_POST['password']);
    $sql = "UPDATE tb_user SET username='$username', password='$password', nama_lengkap='$nama_lengkap', peran='$peran' WHERE id_user=$user_id";
} else {
    // Do not update the password if it is not provided in the form
    $sql = "UPDATE tb_user SET username='$username', nama_lengkap='$nama_lengkap', peran='$peran' WHERE id_user=$user_id";
}

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Record updated successfully");</script>';
    echo "<meta http-equiv='refresh' content='0; url=user.php'>";
} else {
    echo "Error updating record: " . $koneksi->error;
}

// Close
$koneksi->close();
?>