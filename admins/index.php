<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
$mod = getIndex("mod","");
if ($mod== "login")
{
	$u = postIndex("username");
	$p = md5(postIndex("password"));
	
	$sql ="SELECT username, Password, Ten, SoDienThoai, Email FROM admin WHERE  username='$u' and Password= '$p' ";
	$data = $db->selectQuery($sql);
	if (count($data)>0)
	{
		$_SESSION["admin_login"] =1;
		$_SESSION["admin_data"] = $data[0];
	}
}
if ($mod== "logout")
{
		unset($_SESSION["admin_login"] );
		unset($_SESSION["admin_data"]);
}
if (!isset($_SESSION["admin_login"]))
{
	include "login.html";exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
<title>BooknFlight.ml | Admins</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
		
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#"> Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
	
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Xin chào, <a href="#" title="Edit your profile">[<?php echo $_SESSION["admin_data"]["Ten"];?>]</a><br />
               
				<br />
				<a href="../" title="View the Site">Xem website</a> 
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>     
                    <ul>
                    	<li><a href="#">Đổi mật khẩu</a></li>
                        <li><a href="#">Đổi thông tin </a></li>
                        <li><a href="index.php?mod=logout" title="Sign Out">Thoát</a></li>
                        
                    </ul>  
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Quản lý
		      		</a>
					<ul><?php
							$g =getIndex("group", "datvemb");
							$classSanBay = $classTuyenBay = $classChuyenBay=$classMayBay = $classHangMayBay= $classGiaVe=  $classHangGhe= $classPhieuDat= $classKhachHang= $classAdmin  ="";
							if ($g=="sanbay") $classSanBay =" current";
							if ($g=="tuyenbay") $classTuyenBay =" current";
							if ($g=="chuyenbay") $classChuyenBay =" current";
							if ($g=="maybay") $classMayBay =" current";
							if ($g=="hangmaybay") $classHangMayBay =" current";
							if ($g=="giave") $classGiaVe =" current";
							if ($g=="hangghe") $classHangGhe =" current";
							if ($g=="phieudat") $classPhieuDat =" current";
							if ($g=="khachhang") $classKhachHang =" current";
							if ($g=="admin") $classAdmin =" current";
							
						?>
						<li><a class="<?php echo $classSanBay;?>" href="index.php?mod=datvemb&group=sanbay">Sân bay</a></li>
						<li><a class="<?php echo $classTuyenBay;?>" href="index.php?mod=datvemb&group=tuyenbay">Tuyến bay</a></li>
						<li><a class="<?php echo $classChuyenBay;?>" href="index.php?mod=datvemb&group=chuyenbay">Chuyến bay</a></li>
						<li><a class="<?php echo $classMayBay;?>" href="index.php?mod=datvemb&group=maybay">Máy bay</a></li>
						<li><a class="<?php echo $classHangMayBay;?>" href="index.php?mod=datvemb&group=hangmaybay">Hãng máy bay</a></li>
						<li><a class="<?php echo $classGiaVe;?>" href="index.php?mod=datvemb&group=giave">Giá vé</a></li>
						<li><a class="<?php echo $classHangGhe;?>" href="index.php?mod=datvemb&group=hangghe">Hạng ghế</a></li>
						<li><a class="<?php echo $classPhieuDat;?>" href="index.php?mod=datvemb&group=phieudat">Phiếu đặt</a></li>
						<li><a class="<?php echo $classKhachHang;?>" href="index.php?mod=datvemb&group=khachhang">Khách hàng</a></li>
						<li><a class="<?php echo $classAdmin;?>" href="index.php?mod=datvemb&group=admin">Admin</a></li>
					</ul>
				</li>
				
		    
				
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notifitauion if the user has disabled javascript -->
				<div class="notifitauion error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Xin chào, Admin</h2>
		
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>THÔNG BÁO</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<?php
					include "mod.php";
					?>
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2018 BooknFlight.ml | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
