<?php
class Ve extends Db
{	
	function Addve($MaPhieuDat,$MaChuyenBay,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe){
		$sql="INSERT INTO ve(MaPhieuDat,MaChuyenBay,TenHanhKhach,NgaySinh,DanhXung,LoaiVe) VALUES ($MaPhieuDat','$MaChuyenBay',$TenHanhKhach','$NgaySinh','$DanhXung','$LoaiVe')";
		$this->AddQuery($sql);
	}	
	function getfetchPD($MaPhieuDat)
	{
		$sql="SELECT MaVe,MaPhieuDat,MaChuyenBay,TenHanhKhach,NgaySinh,DanhXung,LoaiVe FROM ve WHERE MaPhieuDat='$MaPhieuDat'";
		return $this->selectQuery($sql);
	}
	function getfetch($MaVe)
	{
		$sql="SELECT MaVe,MaPhieuDat,MaChuyenBay,TenHanhKhach,NgaySinh,DanhXung,LoaiVe FROM ve WHERE MaVe='$MaVe'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaVe,$MaPhieuDat,$MaChuyenBay,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe)
	{
		$sql="INSERT INTO ve VALUES ('$MaVe','$MaPhieuDat','$MaChuyenBay','$TenHanhKhach','$NgaySinh','$DanhXung','$LoaiVe')";
		$this->selectQuery($sql);
	}
	function delete($MaVe)
	{
		$sql="DELETE FROM ve WHERE MaVe='$MaVe'";
		$this->selectQuery($sql);
	}
	function update($MaVe,$MaPhieuDat,$MaChuyenBay,$TenHanhKhach,$NgaySinh,$DanhXung,$LoaiVe)
	{
		$sql="UPDATE ve SET MaVe='$MaVe',MaPhieuDat='$MaPhieuDat',MaChuyenBay='$MaChuyenBay',TenHanhKhach='$TenHanhKhach',NgaySinh='$NgaySinh',DanhXung='$DanhXung',LoaiVe='$LoaiVe''  WHERE MaVe='$MaVe'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from ve limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from ve");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);
}
}