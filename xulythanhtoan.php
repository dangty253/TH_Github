<?php
include "config/config.php";
include "include/function.php";
spl_autoload_register("loadClass");
if(!isset($_SESSION)) session_start();

$MaPhieuDat=$_SESSION['id'];
if (isset($_SESSION['dangnhap'])) $username="1";
else $username="null";
$TenKhachHang=$_SESSION['KhachHang']['Ho']." ".$_SESSION['KhachHang']['Ten'];
$NgayDat=date('Y-m-d H:i:s');
$SoDienThoai=$_SESSION['KhachHang']['Sdt'];
$info="0";
$ThanhTien=$_SESSION['datve']['price'];

$Cb = new Phieudat();
$Cb->AddPhieuDat($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien);

$t=$_SESSION['datve']['tuoi'][0];
$Ho="Ho1";$Ten="Ten1";$born="born1";$dx="dx1";$lv="Người lớn";
function addHanhKhach($Ho,$Ten,$born,$dx,$lv,$t,$c){
	for($i=0;$i<$t;$i++)
	{
		$Cb = new Ve();
		$MaPhieuDat = $_SESSION['id'];
		$MaChuyenBay =$_SESSION['datve'][$c]['MaChuyenBay'];
		$TenHanhKhach =$_SESSION['HanhKhach'][$Ho][$i]." ".$_SESSION['HanhKhach'][$Ten][$i];
		$NgaySinh = $_SESSION['HanhKhach'][$born][$i];
		$DanhXung =$_SESSION['HanhKhach'][$dx][$i];
		$LoaiVe = $lv;
		$Cb->Addve($MaPhieuDat,$MaChuyenBay,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe);
	}
}
addHanhKhach('Ho1','Ten1','born1','dx1','Người lớn',$_SESSION['datve']['tuoi'][0],'Khoihanh');
addHanhKhach('Ho2','Ten2','born2','dx2','Trẻ em',$_SESSION['datve']['tuoi'][1],'Khoihanh');
addHanhKhach('Ho3','Ten3','born3','dx3','Em bé',$_SESSION['datve']['tuoi'][2],'Khoihanh');

if($_SESSION['datve']['return']!=""){
	addHanhKhach('Ho1','Ten1','born1','dx1','Người lớn',$_SESSION['datve']['tuoi'][0],'Khuhoi');
	addHanhKhach('Ho2','Ten2','born2','dx2','Trẻ em',$_SESSION['datve']['tuoi'][1],'Khuhoi');
	addHanhKhach('Ho3','Ten3','born3','dx3','Em bé',$_SESSION['datve']['tuoi'][2],'Khuhoi');
}


echo "<script type='text/javascript'>alert('Đặt chỗ thành công !');</script>";
sleep(2);
echo "<script type='text/javascript'>window.location('index.php');</script>";
