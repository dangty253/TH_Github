<?php
class Giave extends Db
{

	function getfetch($MaChuyenBay)
	{
		$sql="SELECT MaChuyenBay,MaHangGhe,GiaVe FROM giave WHERE MaChuyenBay='$MaChuyenBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaChuyenBay,$MaHangGhe,$GiaVe)
	{
		$sql="INSERT INTO giave VALUES ('$MaChuyenBay','$MaHangGhe','$GiaVe')";
		$this->selectQuery($sql);
	}
	function delete($MaChuyenBay)
	{
		$sql="DELETE FROM giave WHERE MaChuyenBay='$MaChuyenBay'";
		$this->selectQuery($sql);
	}
	function update($MaChuyenBay,$MaHangGhe,$GiaVe,$SoDienThoai,$Email)
	{
		$sql="UPDATE giave SET MaChuyenBay='$MaChuyenBay',MaHangGhe='$MaHangGhe',GiaVe='$GiaVe'  WHERE MaChuyenBay='$MaChuyenBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from giave limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from giave");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}