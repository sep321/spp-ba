<?php 
include 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="logo">
      <img src="admin/assets/images/logo1.png" alt="">
    </div>
    <div class="text-center mt-4 name" style="font-size: 15px; text-align: center;">
      <?php echo $title; ?>
    </div>
    <form class="p-3 mt-3" method="POST" action="proses_login.php">
      <div class="form-field d-flex align-items-center">
        <span class="far fa-user"></span>
        <input type="text" name="username" id="userName" placeholder="Username">
      </div>
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="password" name="password" id="pwd" placeholder="Password">
      </div>
      <button class="btn mt-3" type="submit">Login</button>
    </form>
    <div class="text-center fs-6">
      <a href="#">Forget password?</a> or <a href="#">Sign up</a>
    </div>
  </div>
</body>
</html>