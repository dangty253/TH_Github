<?php
class Hangghe extends Db
{

	function getfetch($MaHangGhe)
	{
		$sql="SELECT MaHangGhe,TenHangGhe FROM hangghe WHERE MaHangGhe='$MaHangGhe'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaHangGhe,$TenHangGhe)
	{
		$sql="INSERT INTO hangghe VALUES ('$MaHangGhe','$TenHangGhe'";
		$this->selectQuery($sql);
	}
	function delete($MaHangGhe)
	{
		$sql="DELETE FROM hangghe WHERE MaHangGhe='$MaHangGhe'";
		$this->selectQuery($sql);
	}
	function update($MaHangGhe,$TenHangGhe)
	{
		$sql="UPDATE hangghe SET MaHangGhe='$MaHangGhe',TenHangGhe='$TenHangGhe'  WHERE MaHangGhe='$MaHangGhe'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from hangghe limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from hangghe");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}