<?php
if (!defined("ROOT"))
{
	echo "You don't have permission to access this page!"; exit;	
}
$path =ROOT."/module/tab/1.php";//mac dinh
	$mod = isset($_GET["mod"])?$_GET["mod"]:"";
	if(isset($_POST["submitTim"]))
	{
		$path= ROOT."/module/tab/timchuyenbay.php";
	}
	if(isset($_GET["tt"])){
		$path= ROOT."/module/tab/xacnhanthongtin.php";
	}
	if(isset($_GET["c"])){
		$path= ROOT."/module/tab/timchuyenbay.php";
	}
	if(isset($_POST["submitxacnhan"])){
		$path= ROOT."/module/tab/thanhtoan.php";
	}
	if($mod=="dangnhap"){
		$path= ROOT."/module/tab/dangnhap.html";
	}
	if($mod=="dangky"){
		$path= ROOT."/module/tab/dangky.php";
	}
	include $path;

?>