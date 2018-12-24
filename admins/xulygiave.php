<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaChuyenBay=postIndex("MaChuyenBay","");
$MaHangGhe=postIndex("MaHangGhe","");
$GiaVe=postIndex("GiaVe","");
if($c=='add')
{
	$Sb=new Giave();
	$Sb->add($MaChuyenBay,$MaHangGhe,$GiaVe);
}
else if($c=='update')
{
	$Sb=new Giave();
	$Sb->update($MaChuyenBay,$MaHangGhe,$GiaVe);
}
else if($c=='delete')
{
	$MaChuyenBay = getIndex("id","");
	$Sb=new Giave();
	$Sb->delete($MaChuyenBay);
}
header("Location: index.php?mod=datvemb&group=giave&c=$c");
exit;
