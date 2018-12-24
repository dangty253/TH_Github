<?php
class Admin extends Db
{

	function getfetch($username)
	{
		$sql="SELECT username,Password,Ten,SoDienThoai,Email FROM admin WHERE username='$username'";
		return $this->selectQuery($sql)[0];
	}
	function add($username,$Password,$Ten,$SoDienThoai,$Email)
	{
		$sql="INSERT INTO admin VALUES ('$username','$Password','$Ten','$SoDienThoai','$Email')";
		$this->selectQuery($sql);
	}
	function delete($username)
	{
		$sql="DELETE FROM admin WHERE username='$username'";
		$this->selectQuery($sql);
	}
	function update($username,$Password,$Ten,$SoDienThoai,$Email)
	{
		$sql="UPDATE admin SET username='$username',Password='$Password',Ten='$Ten',SoDienThoai='$SoDienThoai',Email='$Email'  WHERE username='$username'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from admin limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from admin");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}