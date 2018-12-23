<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaTuyenbay=postIndex("MaTuyenbay","");
$GioKhoiHanh=postIndex("GioKhoiHanh","");
$GioHaCanh=postIndex("GioHaCanh","");
$MaTuyenBay=postIndex("MaTuyenBay","");
$MaMayBay=postIndex("MaMayBay","");
$NgayKhoiHanh=postIndex("NgayKhoiHanh","");
$ThoiGianBay=postIndex("ThoiGianBay","");
if($c=='add')
{
	$Sb=new Tuyenbay();
	$Sb->add($MaTuyenbay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay);
}
else if($c=='update')
{
	$Sb=new Tuyenbay();
	$Sb->update($MaTuyenbay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay);
}
else if($c=='delete')
{
	$MaTuyenbay = getIndex("id","");
	$Sb=new Tuyenbay();
	$Sb->delete($MaTuyenbay);
}
header("Location: index.php?mod=datvemb&group=tuyenbay&c=$c");
exit;
