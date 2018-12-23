<?php

$sm=postIndex("sm","");
$username=postIndex("username","");
$Password=postIndex("Password","");
$Password1=postIndex("Password1","");
$HoTen=postIndex("HoTen","");
$DiaChi=postIndex("DiaChi","");
$SoDienThoai=postIndex("SoDienThoai","");
$Email=postIndex("Email","");
function checkUserName($string)
{
	if (preg_match("/^[a-zA-Z0-9._-]*$/",$string)) 
	  return true;
	return false;
}

function checkpass($string)
{
  if (preg_match("/([a-z]{1,})/",$string) &&preg_match("/([A-Z]{1,})/",$string) && preg_match("/([0-9]{1,})/",$string)) 
    return true;
  return false;
} 
function checkphone($string)
{
  if (preg_match("/^[0-9]*$/",$string)) 
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
	if (count($r)!=0) $err .=" Username đã tồn tại <br>";
	if (strlen($username)<6 || checkUserName($username)==false ) 		$err .=" Username ít nhất phải 6 ký tự và chứa ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
	if ($Password!= $Password1 ) 	$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";
	if(strlen($Password)<8 || checkpass($Password)==false) 		$err .="Mật khẩu phải ít nhất 8 ký tự và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường.<br>";
	if(str_word_count($HoTen)<2) 	$err .="Họ tên phải chứa ít nhất 2 từ <br>";
	if (checkEmail($Email)==false) $err.= "Định dạng email sai! (Thiếu @)<br>";
    if (checkphone($SoDienThoai)==false) $err.= "Chi nhap so 0-9<br>";
  	echo "<p style='color: white;font-size: 18px;'>$err</p>";
  	if($err==""){
  		$Sb=new Khachhang();
		$Sb->add($username,md5($Password),$HoTen,$DiaChi,$SoDienThoai,$Email);
		$_SESSION["khachhang_login"] =1;
		$_SESSION["khachhang_data"] = $Sb->Getfetch($username);
		echo "<script type='text/javascript'>alert('Đăng ký thành công !');</script>";
		echo "<script type='text/javascript'>window.location('index.php');</script>";
  	}
}
?>

<form action="index.php?mod=dangky" method="post" >
<table align="center" class="dangky">
	<tr>
		<td>UserName*</td>
		<td><input class="form-control" type="text" name="username" id="Username"></td>
	</tr>
	<tr>
		<td>Mật khẩu*</td>
		<td> <input class="form-control" type="Password" name="Password"></td>
	</tr>
	<tr>
		<td>Nhập lại mật khẩu*</td>
		<td> <input class="form-control" type="Password" name="Password1"></td>
	</tr>

	<tr>
		<td>Họ tên*</td>
		<td> <input class="form-control" type="text" name="HoTen"></td>
	</tr> 
	<tr>
		<td>Địa chỉ</td>
		<td> <input class="form-control" type="text" name="DiaChi"></td>
	</tr>
	<tr>
		<td>Số điện thoại*</td>
		<td> <input class="form-control" type="text" name="SoDienThoai"></td>
	</tr>
		<tr>
		<td>Email*</td>
		<td> <input class="form-control" type="email" name="Email" placeholder="Đừng quên @ nhé"></td>
	</tr>
	<tr>
		<td><input type="submit" name="sm" value="  Đăng ký  " class="btn btn-warning"></td>
		<td><small id="secure" class="form-text text-muted">Tài khoản của bạn được bảo mật</small></td>
	</tr>
</table>
</form>
