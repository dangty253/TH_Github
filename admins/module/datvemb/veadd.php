<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Ve();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
  $MaVe="";
  $MaPhieuDat="";
  $MaChuyenBay="";
  $TenHanhKhach="";
  $NgaySinh="";
  $DanhXung="";
  $LoaiVe="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaVe=$r["MaVe"];
  $MaPhieuDat=$r["MaPhieuDat"];
  $MaChuyenBay=$r["MaChuyenBay"];
  $TenHanhKhach=$r["TenHanhKhach"];
  $NgaySinh=$r["NgaySinh"];
  $DanhXung=$r["DanhXung"];
  $LoaiVe=$r["LoaiVe"];
}

?>
<form action="xulyve.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã vé</td>
    <td width="77%"><input type="text" name="MaVe" value="<?php echo $MaVe;?>"></td>
  </tr> 
  <tr>
    <td width="23%">Mã phiếu đặt</td>
    <td width="77%"><input type="text" name="MaPhieuDat" value="<?php echo $MaPhieuDat;?>"></td>
  </tr>
  
  <tr>
    <td>Mã chuyến bay</td>
    <td><input type="text" name="MaChuyenBay" value="<?php echo $MaChuyenBay;?>"></td>
  </tr>    
  <tr>
    <td>Tên Hành Khách </td>
    <td><input type="text" name="TenHanhKhach" value="<?php echo $TenHanhKhach;?>"></td>
  </tr>
    <tr>
    <td>Ngày sinh</td>
    <td><input type="text" name="NgaySinh" value="<?php echo $NgaySinh;?>"></td>
  </tr>

    <tr>
    <td>Danh xưng</td>
    <td><input type="text" name="DanhXung" value="<?php echo $DanhXung;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Loại vé</td>
    <td><input type="text" name="LoaiVe" value="<?php echo $LoaiVe;?>"></td>
  </tr>
  <tr>
  <tr>
    <td colspan="2">

	<input type="submit" value="<?php echo $info ?>">
 
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>