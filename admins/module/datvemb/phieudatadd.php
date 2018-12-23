<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Phieudat();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
	$MaPhieuDat="";
	$username="";
  $TenKhachHang="";
  $NgayDat="";
  $SoDienThoai="";
  $TrangThai="";
  $ThanhTien="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaPhieuDat=$r["MaPhieuDat"];
  $username=$r["username"];
  $TenKhachHang=$r["TenKhachHang"];
  $NgayDat=$r["NgayDat"];
  $SoDienThoai=$r["SoDienThoai"];
  $TrangThai=$r["info"];
  $ThanhTien=$r["ThanhTien"];
}

?>
<form action="xulyphieudat.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã phiếu đặt</td>
    <td width="77%"><input type="text" name="MaPhieuDat" value="<?php echo $MaPhieuDat;?>"></td>
  </tr>
  
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" value="<?php echo $username;?>"></td>
  </tr>    
  <tr>
    <td>Tên Khách Hàng</td>
    <td><input type="text" name="TenKhachHang" value="<?php echo $TenKhachHang;?>"></td>
  </tr>
    <tr>
    <td>Ngày đặt</td>
    <td><input type="text" name="NgayDat" value="<?php echo $NgayDat;?>"></td>
  </tr>

    <tr>
    <td>Số điện thoại</td>
    <td><input type="text" name="SoDienThoai" value="<?php echo $SoDienThoai;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Trạng thái</td>
    <td><input type="text" name="TrangThai" value="<?php echo $TrangThai;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Thành tiền</td>
    <td><input type="text" name="ThanhTien" value="<?php echo $ThanhTien;?>"></td>
  </tr>
  <tr>
    <td colspan="2">

	<input type="submit" value="<?php echo $info ?>">
 
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>