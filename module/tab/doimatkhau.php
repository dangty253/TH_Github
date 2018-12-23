<?php

$sm=postIndex("sm","");
$username=getIndex("username","");
$Password=postIndex("Password","");
$Password1=postIndex("Password1","");


function checkpass($string)
{
  if (preg_match("/([a-z]{1,})/",$string) &&preg_match("/([A-Z]{1,})/",$string) && preg_match("/([0-9]{1,})/",$string)) 
    return true;
  return false;
} 

if ($sm !="")
{

	$Sb=new Khachhang();
	$r=$Sb->Getfetch($username);
	$err= "";

	if ($Password!= $Password1 ) 	$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";
	if(strlen($Password)<8 || checkpass($Password)==false) 		$err .="Mật khẩu phải ít nhất 8 ký tự và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường.<br>";
  	echo "<p style='color: white;font-size: 18px;'>$err</p>";
  	if($err==""){
  		$Sb=new Khachhang();
		$Sb->updatepass($username,md5($Password));
		$_SESSION["khachhang_login"] =1;
		$_SESSION["khachhang_data"] = $Sb->Getfetch($username);
		echo "<script type='text/javascript'>	alert('Đổi mật khẩu thành công !');";
    	echo " location.href='index.html';</script>";
  	}
}
?>

<form action="doi-mat-khau-<?php echo $username ?>.html" method="post" >
<table align="center" width="60%" class="dangnhap">
	<tr>
		<td>UserName</td>
		<td><input type="text" name="username" id="Username" value="<?php echo $username ?>" disabled="disabled" ></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td> <input type="Password" name="Password"></td>
	</tr>
	<tr>
		<td>Nhập lại mật khẩu</td>
		<td> <input type="Password" name="Password1"></td>
	</tr>

	<tr>
		<td colspan="2" style="text-align: center;"><input type="submit" name="sm" value="  Đổi mật khẩu  "></td>
	</tr>
</table>
</form>
