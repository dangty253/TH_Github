<?php
include "config/config.php";
include "include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();
$db= new Db();
$log = getIndex("log","");
if ($log== "login")
{
	$u = postIndex("username");
	$p = md5(postIndex("password"));
	$sql ="SELECT username, Password, HoTen,DiaChi, SoDienThoai, Email FROM khachhang WHERE  username='$u' and Password= '$p' ";
	$data = $db->selectQuery($sql);
	if (count($data)>0)
	{
		$_SESSION["khachhang_login"] =1;
		$_SESSION["khachhang_data"] = $data[0];
	}
	else
	{
		echo "<script type='text/javascript'>	alert('Đăng nhập thất bại !');";
    	echo " location.href='dang-nhap.html';</script>";
	}
}
if ($log== "logout")
{
		unset($_SESSION["khachhang_login"] );
		unset($_SESSION["khachhang_data"]);
}
if (!isset($_SESSION["khachhang_login"]))
{
    echo "<script type='text/javascript'> location.href='dang-nhap.html';</script>";
}
else {
    echo "<script type='text/javascript'>	alert('Đăng nhập thành công !');";
    echo " location.href='index.html';</script>";


}