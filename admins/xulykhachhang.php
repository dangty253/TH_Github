<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$username=postIndex("username","");
$Password=md5(postIndex("Password",""));
$HoTen=postIndex("HoTen","");
$DiaChi=postIndex("DiaChi","");
$SoDienThoai=postIndex("SoDienThoai","");
$Email=postIndex("Email","");
if($c=='add')
{
	$Sb=new Khachhang();
	$Sb->add($username,$Password,$HoTen,$DiaChi,$SoDienThoai,$Email);
}
else if($c=='update')
{
	$Sb=new Khachhang();
	$Sb->update($username,$Password,$HoTen,$DiaChi,$SoDienThoai,$Email);
}
else if($c=='delete')
{
	$username = getIndex("id","");
	$Sb=new Khachhang();
	$Sb->delete($username);
}
header("Location: index.php?mod=datvemb&group=khachhang&c=$c");
exit;