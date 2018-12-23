<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Chuyenbay();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
  $MaChuyenBay="";
  $GioKhoiHanh="";
  $GioHaCanh="";
  $MaTuyenBay="";
  $MaMayBay="";
  $NgayKhoiHanh="";
  $ThoiGianBay="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaChuyenBay=$r["MaChuyenBay"];
  $GioKhoiHanh=$r["GioKhoiHanh"];
  $GioHaCanh=$r["GioHaCanh"];
  $MaTuyenBay=$r["MaTuyenBay"];
  $MaMayBay=$r["MaMayBay"];
  $NgayKhoiHanh=$r["NgayKhoiHanh"];
  $ThoiGianBay=$r["ThoiGianBay"];
}

?>
<form action="xulychuyenbay.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã sân bay</td>
    <td width="77%"><input type="text" name="MaChuyenBay" value="<?php echo $MaChuyenBay;?>"></td>
  </tr>
  
  <tr>
    <td>Tên sân bay</td>
    <td><input type="text" name="GioKhoiHanh" value="<?php echo $GioKhoiHanh;?>"></td>
  </tr>
    <tr>
    <td>Tên tỉnh thành</td>
    <td><input type="text" name="GioHaCanh" value="<?php echo $GioHaCanh;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Tên tỉnh thành</td>
    <td><input type="text" name="MaTuyenBay" value="<?php echo $MaTuyenBay;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Tên tỉnh thành</td>
    <td><input type="text" name="MaMayBay" value="<?php echo $MaMayBay;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Tên tỉnh thành</td>
    <td><input type="text" name="NgayKhoiHanh" value="<?php echo $NgayKhoiHanh;?>"></td>
  </tr>
  <tr>
    <tr>
    <td>Tên tỉnh thành</td>
    <td><input type="text" name="ThoiGianBay" value="<?php echo $ThoiGianBay;?>"></td>
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