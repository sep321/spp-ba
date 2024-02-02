<?php 

include 'koneksi.php';

session_start();
session_destroy();

unset($_SESSION['id_user']);
unset($_SESSION['login_type']);

header("location:../index.php");
?>