<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Maybay();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
	$MaMayBay="";
	$MaHangMayBay="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $MaMayBay=$r['MaMayBay'];
  $MaHangMayBay=$r['MaHangMayBay'];
}

?>
<form action="xulymaybay.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã may bay</td>
    <td width="77%"><input type="text" name="MaMayBay" value="<?php echo $MaMayBay;?>"></td>
  </tr>
  
  <tr>
    <td>Mã hãng máy bay</td>
    <td><input type="text" name="MaHangMayBay" value="<?php echo $MaHangMayBay;?>"></td>
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