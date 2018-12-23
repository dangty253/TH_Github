<?php

$sm=postIndex("sm","");
$username=postIndex("username","");
$Email=postIndex("Email","");
	function checkUserName($string)
	{
		if (preg_match("/^[a-zA-Z0-9._-]*$/",$string)) 
		  return true;
		return false;
	}
	function checkEmail($string)
	{  
		if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $string))
		 return true;
		return false;	
		
	}
if ($sm !="")
{

	$Sb=new Khachhang();
	$r=$Sb->Getfetch($username);
	$err= "";
	if (count($r)==0) $err .=" Username không tồn tại <br>";
  	echo "<p style='color: white;font-size: 18px;'>$err</p>";
  	if($err==""){
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
		$to=$r['Email']; // Email người nhận (email thực)
		$name="Hi, ".$r['HoTen']; // Tên người nhận
		$mail->From = $from;
		$mail->FromName = "Booking online"; // Tên người gửi 
		$mail->AddAddress($to,$name);
		$mail->AddReplyTo($from,"Quen mat khau");
		$mail->WordWrap = 50; // set word wrap
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Quen mat khau!";
		$mail->Body ="User : ".$r['username'] ."<br> Quý khách click vào link để đổi mật khẩu mới : <a href='". 'booknflight.ml/doi-mat-khau-'.$r['username'].".html"."'>".'doi-mat-khau'."</a>" ."<hr> Chi tiet xem tai: <a href='". 'booknflight.ml'."'>".'booknflight.ml'."</a>";
		//$mail->SMTPDebug = 2;//Hiện debug lỗi. Mặc định sẽ tắt lỗi này
		$mail->Send();

		echo "<script type='text/javascript'>	alert('Đã gửi Email đổi mật khẩu !');</script>";
  	}
}	
?>
<form action="quen-mat-khau.html" method="post" >
<table align="center">
	<tr>
		<td>UserName</td>
		<td><input class="form-control" type="text" name="username" id="Username" value="<?php echo $username ?>" placeholder="Tên đăng nhập của bạn"></td>
	</tr>
	<tr>
		<td></td>
		<td style="padding-top: 1em;"><input class="btn btn-warning" type="submit" name="sm" value=" Lấy lại mật khẩu "></td>
	</tr>
</table>
	
</form>
