<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaSanBay = postIndex("MaSanBay","");
$TenSanBay = postIndex("TenSanBay","");
$TenTinhThanh = postIndex("TenTinhThanh","");
if($c=='add')
{
	$Sb=new Sanbay();
	$Sb->add($MaSanBay,$TenTinhThanh,$TenSanBay);
}
else if($c=='update')
{
	$Sb=new Sanbay();
	$Sb->update($MaSanBay,$TenTinhThanh,$TenSanBay);
}
else if($c=='delete')
{
	$MaSanBay = getIndex("id","");
	$Sb=new Sanbay();
	$Sb->delete($MaSanBay);
}
header("Location: index.php?mod=datvemb&group=sanbay&c=$c");
exit;
