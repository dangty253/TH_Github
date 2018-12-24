<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaMayBay=postIndex("MaMayBay","");
$MaHangMayBay=postIndex("MaHangMayBay","");
if($c=='add')
{
	$Sb=new Maybay();
	$Sb->add($MaMayBay,$MaHangMayBay);
}
else if($c=='update')
{
	$Sb=new Maybay();
	$Sb->update($MaMayBay,$MaHangMayBay);
}
else if($c=='delete')
{
	$MaMayBay = getIndex("id","");
	$Sb=new Maybay();
	$Sb->delete($MaMayBay);
}
header("Location: index.php?mod=datvemb&group=maybay&c=$c");
exit;
