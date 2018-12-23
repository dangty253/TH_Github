<?php
class Chuyenbay extends Db
{
	//lay tat ca cac cuon sach

	function searchCB($MaSanBayDi,$MaSanBayDen,$NgayKhoiHanh,$MaHangGhe)
	{
		$sql="SELECT
		maybay.MaMayBay,
		hangmaybay.MaHangMayBay,
		hangmaybay.TenHangMayBay,
		chuyenbay.MaChuyenBay,
		chuyenbay.GioKhoiHanh,
		chuyenbay.GioHaCanh,
		chuyenbay.NgayKhoiHanh,
		chuyenbay.ThoiGianBay,
		tuyenbay.MaTuyenBay,
		tuyenbay.MaSanBayDi,
		tuyenbay.MaSanBayDen,
		giave.GiaVe,
		hangghe.MaHangGhe,
		hangghe.TenHangGhe
		FROM
		maybay
		INNER JOIN hangmaybay ON maybay.MaHangMayBay = hangmaybay.MaHangMayBay
		INNER JOIN chuyenbay ON chuyenbay.MaMayBay = maybay.MaMayBay
		INNER JOIN tuyenbay ON chuyenbay.MaTuyenBay = tuyenbay.MaTuyenBay
		INNER JOIN giave ON giave.MaChuyenBay = chuyenbay.MaChuyenBay
		INNER JOIN hangghe ON giave.MaHangGhe = hangghe.MaHangGhe
		WHERE
		MaSanBayDi = '$MaSanBayDi' AND
		MaSanBayDen = '$MaSanBayDen' AND
		NgayKhoiHanh = '$NgayKhoiHanh' AND
		hangghe.MaHangGhe	= '$MaHangGhe'";
		return $this->selectQuery($sql);
	}

	function getfetch($MaChuyenBay)
	{
		$sql="SELECT MaChuyenBay,GioKhoiHanh,GioHaCanh,MaTuyenBay,MaMayBay,NgayKhoiHanh,ThoiGianBay FROM chuyenbay WHERE MaChuyenBay='$MaChuyenBay'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaChuyenBay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay)
	{
		$sql="INSERT INTO chuyenbay VALUES ('$MaChuyenBay','$GioKhoiHanh','$GioHaCanh','$MaTuyenBay','$MaMayBay','$NgayKhoiHanh','$ThoiGianBay')";
		$this->selectQuery($sql);
	}
	function delete($MaChuyenBay)
	{
		$sql="DELETE FROM chuyenbay WHERE MaChuyenBay='$MaChuyenBay'";
		$this->selectQuery($sql);
	}
	function update($MaChuyenBay,$GioKhoiHanh,$GioHaCanh,$MaTuyenBay,$MaMayBay,$NgayKhoiHanh,$ThoiGianBay)
	{
		$sql="UPDATE chuyenbay SET MaChuyenBay='$MaChuyenBay',GioKhoiHanh='$GioKhoiHanh',GioHaCanh='$GioHaCanh',MaTuyenBay='$MaTuyenBay',MaMayBay='$MaMayBay',NgayKhoiHanh='$NgayKhoiHanh',ThoiGianBay='$ThoiGianBay'  WHERE MaChuyenBay='$MaChuyenBay'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from chuyenbay limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from chuyenbay");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}


