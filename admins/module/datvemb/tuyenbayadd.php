<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Tuyenbay();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
	$MaTuyenBay="";
	$MaSanBayDi="";
  $MaSanBayDen="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaTuyenBay=$r['MaTuyenBay'];
  $MaSanBayDi=$r['MaSanBayDi'];
  $MaSanBayDen=$r['MaSanBayDen'];
}

?>
<form action="xulytuyenbay.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã tuyến bay</td>
    <td width="77%"><input type="text" name="MaTuyenBay" value="<?php echo $MaTuyenBay;?>"></td>
  </tr>
  
  <tr>
    <td>Mã sân bay đi</td>
    <td><input type="text" name="MaSanBayDi" value="<?php echo $MaSanBayDi;?>"></td>
  </tr>
    <tr>
    <td>Mã sân bay đến</td>
    <td><input type="text" name="MaSanBayDen" value="<?php echo $MaSanBayDen;?>"></td>
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