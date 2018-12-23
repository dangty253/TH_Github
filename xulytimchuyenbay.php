<?php 
include "config/config.php";
include "include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['datve'])) 
	$_SESSION['datve'] = array();
$datve = array();
$datve['submitTim']=postIndex("submitTim","");
$datve['dxp']=postIndex("dxp","");
$datve['dd']=postIndex("dd","");
$datve['datexp']=postIndex("datexp","");
$datve['return']=postIndex("return","");
$datve['hangghe']=postIndex("hangghe","");
$datve['tuoi']=postIndex("tuoi",array());

$Cb = new Sanbay();
$SanBayDi=$Cb->masanbay($datve['dxp']);
$SanBayDen=$Cb->masanbay($datve['dd']);
$datve['SanBayDi']=$SanBayDi;
$datve['SanBayDen']=$SanBayDen;
$_SESSION['datve']=$datve;

$base = new Base();
$url= $base->striptitle($SanBayDi[0]['TenTinhThanh']).'-'.$base->striptitle($SanBayDen[0]['TenTinhThanh']) .".html";
header('Location: chuyen-bay-di-'.$url);
exit;