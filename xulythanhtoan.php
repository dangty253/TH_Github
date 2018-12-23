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


//echo "<script type='text/javascript'>alert('Đặt chỗ thành công !');</script>";

		//sử dụng để load thư viện 
		include ROOT."/lib/PHPMailer/PHPMailerAutoload.php";
		
		$mail = new PHPMailer();
		$mail->IsSMTP(); // set mailer to use SMTP
		$mail->Host = "smtp.gmail.com"; // specify main and backup server
		$mail->Port = 465; // set the port to use
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->SMTPSecure = 'ssl';
		$mail->Username = "test.dangty253@gmail.com"; //Địa chỉ gmail sử dụng để gửi email
		$mail->Password = "Ty123456"; // your SMTP password or your gmail password
		$from = "test.dangty253@gmail.com"; // Khi người sử dụng bấm reply sẽ gửi đến email này
		$to=$_SESSION['KhachHang']['Email']; // Email người nhận (email thực)
		$name="Hi, ".$_SESSION['KhachHang']['Ten']; // Tên người nhận
		$mail->From = $from;
		$mail->FromName = "Booking online"; // Tên người gửi 
		$mail->AddAddress($to,$name);
		$mail->AddReplyTo($from,"Phong cham soc khach hang");
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Xac nhan dat cho!";
		$mail->Body ="Tổng số tiền : ".number_format($_SESSION['datve']['price']) ."<br> Quý khách đã đặt chỗ thành công! vui lòng thanh toán sớm để nhận vé !!" ."<hr> Chi tiet xem tai: <a href='". 'booknflight.ml'."'>".'booknflight.ml'."</a>";
		$mail->SMTPDebug = 2;//Hiện debug lỗi. Mặc định sẽ tắt lỗi này
		$mail->Send();
echo $_SESSION['KhachHang']['Email'];
unset($_SESSION['datve']);
echo "<script type='text/javascript'>	alert('Đặt chỗ thành công !');";
echo " location.href='index.html';</script>";
?>
