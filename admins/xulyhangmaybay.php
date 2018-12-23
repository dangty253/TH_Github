<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$username=postIndex("username","");
$Password=md5(postIndex("Password",""));
$Ten=postIndex("Ten","");
$SoDienThoai=postIndex("SoDienThoai","");
$Email=postIndex("Email","");
if($c=='add')
{
	$Sb=new Admin();
	$Sb->add($username,$Password,$Ten,$SoDienThoai,$Email);
}
else if($c=='update')
{
	$Sb=new Admin();
	$Sb->update($username,$Password,$Ten,$SoDienThoai,$Email);
}
else if($c=='delete')
{
	$username = getIndex("id","");
	$Sb=new Admin();
	$Sb->delete($username);
}
header("Location: index.php?mod=datvemb&group=hangmaybay&c=$c");
exit;
