<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaPhieuDat=postIndex("MaPhieuDat","");
$username=postIndex("username","");
$TenKhachHang=postIndex("TenKhachHang","");
$NgayDat=postIndex("NgayDat","");
$SoDienThoai=postIndex("SoDienThoai","");
$info=postIndex("info","");
$ThanhTien=postIndex("ThanhTien","");
if($c=='add')
{
	$Sb=new Phieudat();
	$Sb->add($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien);
}
else if($c=='update')
{
	$Sb=new Phieudat();
	$Sb->update($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien);
}
else if($c=='delete')
{
	$MaPhieuDat = getIndex("id","");
	$Sb=new Phieudat();
	$Sb->delete($MaPhieuDat);
}
header("Location: index.php?mod=datvemb&group=phieudat&c=$c");
exit;