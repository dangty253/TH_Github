<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaChuyenBay=postIndex("MaChuyenBay","");
$GioKhoiHanh=postIndex("GioKhoiHanh","");
$GioHaCanh=postIndex("GioHaCanh","");
$MaTuyenBay=postIndex("MaTuyenBay","");
$MaMayBay=postIndex("MaMayBay","");
$NgayKhoiHanh=postIndex("NgayKhoiHanh","");
$ThoiGianBay=postIndex("ThoiGianBay","");
if($c=='add')
{
	$Sb=new Chuyenbay();
	$Sb->add($MaChuyenBay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay);
}
else if($c=='update')
{
	$Sb=new Chuyenbay();
	$Sb->update($MaChuyenBay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay);
}
else if($c=='delete')
{
	$MaChuyenBay = getIndex("id","");
	$Sb=new Chuyenbay();
	$Sb->delete($MaChuyenBay);
}
header("Location: index.php?mod=datvemb&group=chuyenbay&c=$c");
exit;
