<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Giave();
if ($id=="") //khong co -> them moi
{
  $c='add';
  $info ="Thêm";
  $MaChuyenBay="";
  $MaHangGhe="";
  $GiaVe="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaChuyenBay=$r['MaChuyenBay'];
  $MaHangGhe=$r['MaHangGhe'];
  $GiaVe=$r['GiaVe'];
}

?>
<form action="xulygiave.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã tuyến bay</td>
    <td width="77%"><input type="text" name="MaChuyenBay" value="<?php echo $MaChuyenBay;?>"></td>
  </tr>
  
  <tr>
    <td>Mã sân bay đi</td>
    <td><input type="text" name="MaHangGhe" value="<?php echo $MaHangGhe;?>"></td>
  </tr>
    <tr>
    <td>Mã sân bay đến</td>
    <td><input type="text" name="GiaVe" value="<?php echo $GiaVe;?>"></td>
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