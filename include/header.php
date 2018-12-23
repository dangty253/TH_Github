
<link href="css/main.css" rel='stylesheet' type='text/css' />
          <?php
          if (!isset($_SESSION["khachhang_login"])){ ?>
          <td ><a href='dang-nhap.html' >ĐĂNG NHẬP</a></td>
          <td style="background-color: #F99E1D"><a href='dang-ky.html'>ĐĂNG KÝ</a></td>
          
        <?php }
        else {
          echo "<td style='text-align: right;'><h2><a href='tai-khoan-khach-hang.html'> [".$_SESSION["khachhang_data"]['HoTen']."]</a><h2>
          <a href='dangnhap.php?log=logout' style='font-size: 20px'>[Thoát]</a></td>";
        }
          ?>
