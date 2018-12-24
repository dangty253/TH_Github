<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");

$c = getIndex("c","");
$MaHangGhe=postIndex("MaHangGhe","");
$TenHangGhe=postIndex("TenHangGhe","");
if($c=='add')
{
	$Sb=new Hangghe();
	$Sb->add($MaHangGhe,$TenHangGhe);
}
else if($c=='update')
{
	$Sb=new Hangghe();
	$Sb->update($MaHangGhe,$TenHangGhe);
}
else if($c=='delete')
{
	$MaHangGhe = getIndex("id","");
	$Sb=new Hangghe();
	$Sb->delete($MaHangGhe);
}
header("Location: index.php?mod=datvemb&group=hangghe&c=$c");
exit;
