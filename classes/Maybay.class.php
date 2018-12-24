<?php
class Maybay extends Db
{

	function getfetch($MaMayBay)
	{
		$sql="SELECT MaMayBay,MaHangMayBay FROM maybay WHERE MaMayBay='$MaMayBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaMayBay,$MaHangMayBay)
	{
		$sql="INSERT INTO maybay VALUES ('$MaMayBay','$MaHangMayBay'";
		$this->selectQuery($sql);
	}
	function delete($MaMayBay)
	{
		$sql="DELETE FROM maybay WHERE MaMayBay='$MaMayBay'";
		$this->selectQuery($sql);
	}
	function update($MaMayBay,$MaHangMayBay)
	{
		$sql="UPDATE maybay SET MaMayBay='$MaMayBay',MaHangMayBay='$MaHangMayBay'  WHERE MaMayBay='$MaMayBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from maybay limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from maybay");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}