<?php
if (isset($_SESSION["khachhang_data"]))
{
	$sm=postIndex("sm","");
	$Password=postIndex("Password","");
	$Password1=postIndex("Password1","");
	$Password2=postIndex("Password2","");
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


		$err= "";
		if(md5($Password)!= $_SESSION["khachhang_data"]["Password"] ) $err.="Mật khẩu cũ không đúng. <br>";
		if ($Password1!= $Password2 ) 	$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";
		if(strlen($Password1)<8 || checkpass($Password1)==false) 		$err .="Mật khẩu phải ít nhất 8 ký tự và phải có ít nhất một ký tự số, một ký tự hoa, một ký tự thường.<br>";
		if(str_word_count($HoTen)<2) 	$err .="Họ tên phải chứa ít nhất 2 từ <br>";
		if (checkEmail($Email)==false) $err.= "Định dạng email sai!<br>";
	    if (checkphone($SoDienThoai)==false) $err.= "Chi nhap so 0-9<br>";
	  	echo "<p style='color: white;font-size: 18px;'>$err</p>";
	  	if($err==""){
	  		$Sb=new Khachhang();
			$Sb->update($_SESSION["khachhang_data"]["username"],md5($Password1),$HoTen,$DiaChi,$SoDienThoai,$Email);
			$_SESSION["khachhang_data"] = $Sb->Getfetch($_SESSION["khachhang_data"]["username"]);
			echo "<script type='text/javascript'>	alert('Thay đổi thông tin thành công !');";
    		echo " location.href='index.html';</script>";


	  	}
	}
	?>

	<form action="tai-khoan-khach-hang.html" method="post" >

	<table align="center" class="dangky table borderless col-md-12 col-xs-4">
		<center><h2>CHỈNH SỬA THÔNG TIN CÁ NHÂN</h2></center>
		<hr>
		<tr>
			<td>UserName</td>
			<td><input type="text" name="username" id="Username" value="<?php echo $_SESSION["khachhang_data"]["username"] ?>" disabled="disabled" class="form-control"></td>
		</tr>
		<tr>
			<td>Mật khẩu cũ</td>
			<td> <input type="Password" name="Password" class="form-control"></td>
		</tr>
		<tr>
			<td>Mật khẩu mới</td>
			<td> <input type="Password" name="Password1" class="form-control"></td>
		</tr>
		<tr>
			<td>Nhập lại mật khẩu</td>
			<td> <input type="Password" name="Password2" class="form-control"></td>
		</tr>

		<tr>
			<td>Họ tên</td>
			<td> <input type="text" name="HoTen" value="<?php echo $_SESSION["khachhang_data"]["HoTen"] ?>" class="form-control"></td>
		</tr> 
		<tr>
			<td>Địa chỉ</td>
			<td> <input type="text" name="DiaChi" value="<?php echo $_SESSION["khachhang_data"]["DiaChi"] ?>" class="form-control"></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td> <input type="text" name="SoDienThoai" value="<?php echo $_SESSION["khachhang_data"]["SoDienThoai"] ?>" class="form-control"></td>
		</tr>
			<tr>
			<td>Email</td>
			<td> <input type="text" name="Email" value="<?php echo $_SESSION["khachhang_data"]["Email"] ?>" class="form-control"></td>
		</tr>
	</table>
	<hr>
	<center><td><input class="btn btn-warning" type="submit" name="sm" value="  Lưu thay đổi "></td></center>
	</form>
<?php
}