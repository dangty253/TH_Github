<?php
class Tuyenbay extends Db
{

	function getfetch($MaTuyenBay)
	{
		$sql="SELECT MaTuyenBay,MaSanBayDi,MaSanBayDen FROM tuyenbay WHERE MaTuyenBay='$MaTuyenBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaTuyenBay,$MaSanBayDi,$MaSanBayDen)
	{
		$sql="INSERT INTO tuyenbay VALUES ('$MaTuyenBay','$MaSanBayDi','$MaSanBayDen')";
		$this->selectQuery($sql);
	}
	function delete($MaTuyenBay)
	{
		$sql="DELETE FROM tuyenbay WHERE MaTuyenBay='$MaTuyenBay'";
		$this->selectQuery($sql);
	}
	function update($MaTuyenBay,$Password,$Ten,$SoDienThoai,$Email)
	{
		$sql="UPDATE tuyenbay SET MaTuyenBay='$MaTuyenBay',MaSanBayDi='$MaSanBayDi',MaSanBayDen='$MaSanBayDen'  WHERE MaTuyenBay='$MaTuyenBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from tuyenbay limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from tuyenbay");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}