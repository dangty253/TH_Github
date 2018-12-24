<?php
class Sanbay extends Db
{
	function getall()
	{
		$sql="SELECT MaSanBay,TenTinhThanh,TenSanBay FROM sanbay";
		return $this->selectQuery($sql);
	}
	function masanbay($TenTinhThanh)
	{
		$sql="SELECT MaSanBay,TenTinhThanh,TenSanBay FROM sanbay WHERE TenTinhThanh='$TenTinhThanh'";
		return $this->selectQuery($sql);
	}
	function getfetch($MaSanBay)
	{
		$sql="SELECT MaSanBay,TenTinhThanh,TenSanBay FROM sanbay WHERE MaSanBay='$MaSanBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaSanBay,$TenTinhThanh,$TenSanBay)
	{
		$sql="INSERT INTO sanbay VALUES ('$MaSanBay','$TenTinhThanh','$TenSanBay')";
		$this->selectQuery($sql);
	}
	function delete($MaSanBay)
	{
		$sql="DELETE FROM sanbay WHERE MaSanBay='$MaSanBay'";
		$this->selectQuery($sql);
	}
	function update($MaSanBay,$TenTinhThanh,$TenSanBay)
	{
		$sql="UPDATE sanbay SET MaSanBay='$MaSanBay',TenTinhThanh='$TenTinhThanh',TenSanBay='$TenSanBay'  WHERE MaSanBay='$MaSanBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from Sanbay limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from Sanbay");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}