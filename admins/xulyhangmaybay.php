<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaHangMayBay= postIndex("MaHangMayBay","");
$TenHangMayBay= postIndex("TenHangMayBay","");
if($c=='add')
{
	$Sb=new Hangmaybay();
	$Sb->add($MaHangMayBay,$TenHangMayBay);
}
else if($c=='update')
{
	$Sb=new Hangmaybay();
	$Sb->update($MaHangMayBay,$TenHangMayBay);
}
else if($c=='delete')
{
	$MaHangMayBay = postIndex("id","");
	$Sb=new Hangmaybay();
	$Sb->delete($MaHangMayBay);
}
header("Location: index.php?mod=datvemb&group=hangmaybay&c=$c");
exit;
