<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$MaPhieuDat=getIndex("MaPhieuDat","");

$c = getIndex("c","");
$MaVe=postIndex("MaVe","");
$MaPhieuDat=postIndex("MaPhieuDat","");
$MaChuyenBay=postIndex("MaChuyenBay","");
$NgaySinh=postIndex("NgaySinh","");
$DanhXung=postIndex("DanhXung","");
$LoaiVe=postIndex("LoaiVe","");
if($c=='add')
{
	$Sb=new Ve();
	$Sb->add($MaVe,$Mave,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe);
}
else if($c=='update')
{
	$Sb=new Ve();
	$Sb->update($MaVe,$Mave,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe);
}
else if($c=='delete')
{
	$username = getIndex("id","");
	$Sb=new Ve();
	$Sb->delete($Mave);
}
header("Location: index.php?mod=datvemb&group=ve&c=$c&MaPhieuDat=$MaPhieuDat");
exit;