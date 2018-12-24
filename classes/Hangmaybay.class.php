<?php
class Hangmaybay extends Db
{

	function getfetch($MaHangMayBay)
	{
		$sql="SELECT MaHangMayBay,TenHangMayBay FROM hangmaybay WHERE MaHangMayBay='$MaHangMayBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaHangMayBay,$TenHangMayBay)
	{
		$sql="INSERT INTO hangmaybay VALUES ('$MaHangMayBay','$TenHangMayBay'";
		$this->selectQuery($sql);
	}
	function delete($MaHangMayBay)
	{
		$sql="DELETE FROM hangmaybay WHERE MaHangMayBay='$MaHangMayBay'";
		$this->selectQuery($sql);
	}
	function update($MaHangMayBay,$TenHangMayBay)
	{
		$sql="UPDATE hangmaybay SET MaHangMayBay='$MaHangMayBay',TenHangMayBay='$TenHangMayBay'  WHERE MaHangMayBay='$MaHangMayBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from hangmaybay limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from hangmaybay");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}