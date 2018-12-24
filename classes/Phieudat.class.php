<?php	
class Phieudat extends Db
{
	function AddPhieuDat($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien){
		$sql="INSERT INTO phieudat(MaPhieuDat,username,TenKhachHang,NgayDat,SoDienThoai,info,ThanhTien) VALUES ('$MaPhieuDat',$username,'$TenKhachHang','$NgayDat','$SoDienThoai',$info,$ThanhTien)";
		$this->AddQuery($sql);
	}
		function getfetch($MaPhieuDat)
	{
		$sql="SELECT MaPhieuDat,username,TenKhachHang,NgayDat,SoDienThoai,info,ThanhTien FROM phieudat WHERE MaPhieuDat='$MaPhieuDat'";
		return $this->selectQuery($sql)[0];
	}
	function add($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien)
	{
		$sql="INSERT INTO phieudat VALUES ('$MaPhieuDat','$username','$TenKhachHang','$NgayDat','$SoDienThoai','$info','$ThanhTien')";
		$this->selectQuery($sql);
	}
	function delete($MaPhieuDat)
	{
		$sql="DELETE FROM phieudat WHERE MaPhieuDat='$MaPhieuDat'";
		$this->selectQuery($sql);
	}
	function update($MaPhieuDat,$username,$TenKhachHang,$NgayDat,$SoDienThoai,$info,$ThanhTien)
	{
		$sql="UPDATE phieudat SET MaPhieuDat='$MaPhieuDat',MaPhieuDat='$username',MaPhieuDat='$TenKhachHang',MaPhieuDat='$NgayDat',MaPhieuDat='$SoDienThoai',MaPhieuDat='$info',MaPhieuDat='$ThanhTien'  WHERE MaPhieuDat='$MaPhieuDat'";
		$this->selectQuery($sql);
	}
	function getall_page($page)
	{
		$from = ($page-1)* SIZE;
		$s=SIZE;
		$sql="select * from phieudat limit $from, ". SIZE;
		return $this->selectQuery($sql);
	}

	function count_page()
	{
	$data = $this->selectQuery("select Count(*) as dem from phieudat");
	$sosach = $data[0]['dem'];
	return ceil($sosach/SIZE);

	}
}