<?php
include "/config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
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
}
if ($log== "logout")
{
		unset($_SESSION["khachhang_login"] );
		unset($_SESSION["khachhang_data"]);
}
if (!isset($_SESSION["khachhang_login"]))
{
	echo "<script type='text/javascript'>window.location('index.php?mod=dangnhap');</script>";
}
else echo "<script type='text/javascript'>window.location('index.php');</script>";