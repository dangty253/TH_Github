<?php

include "config/config.php";
include "include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();
//$oke = getIndex("oke","");
//if($oke=="true") echo "<script type='text/javascript'>alert('Đặt chỗ thành công !');</script>";
?>

<head>
<title>BooknFlight | Đồng hành cùng bạn, mọi lúc mọi nơi</title>
  <!-- Định dạng Unicode -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Boostrap here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- End Boostrap -->
  <!-- Stylesheet -->
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <!-- End Stylesheet -->
  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Roboto|Unlock" rel="stylesheet">
  <!--//fonts-->
</head>
<body> 
<div class="container">
    <a href="index.php"><h1>Booknflight</h1>
    <center><h3>Đồng hành cùng bạn, mọi lúc mọi nơi</h3></center>
    </a>
    <div class="row">
      <div class="Form-tuyenbay">
          <table class="table">
            <td><a href="index.php">Trang chủ | BooknFlight</a></td>
            <td>Hotline: 0123456789</td>
            <?php include "include/header.php"; ?>
            <?php include "mod.php"; ?> 
          </table>  
      </div>
    </div>
  </div>

  <!-- Script for boostrap here -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- End Script -->
</body>
</html>