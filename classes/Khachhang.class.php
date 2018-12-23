<?php
class Khachhang extends Db
{

	function getfetch($username)
	{
		$sql="SELECT username,Password,HoTen,DiaChi,SoDienThoai,Email FROM khachhang WHERE username='$username'";
		$s=$this->selectQuery($sql);
		return count($s)==0?$s:$s[0];
	}
	function add($username,$Password,$HoTen,$DiaChi,$SoDienThoai,$Email)
	{
		$sql="INSERT INTO khachhang VALUES ('$username','$Password','$HoTen','$DiaChi','$SoDienThoai','$Email')";
		$this->selectQuery($sql);
	}
	function delete($username)
	{
		$sql="DELETE FROM khachhang WHERE username='$username'";
		$this->selectQuery($sql);
	}
	function update($username,$Password,$HoTen,$DiaChi,$SoDienThoai,$Email)
	{
		$sql="UPDATE khachhang SET username='$username',Password='$Password',HoTen='$HoTen',DiaChi='$DiaChi',SoDienThoai='$SoDienThoai',Email='$Email'  WHERE username='$username'";
		$this->selectQuery($sql);
	}
	function updatepass($username,$Password)
	{
		$sql="UPDATE khachhang SET username='$username',Password='$Password'  WHERE username='$username'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from khachhang limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from khachhang");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}