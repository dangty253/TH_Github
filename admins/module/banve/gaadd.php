<?php
$id = Utils::getIndex("id");
$r = $ga->getById($id);
$ac2= "saveEdit";
$info ="Sửa ga!";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
	$info ="Thêm Mới ga";
	$r["maga"]="";
	$r["tenga"]="";
  $r["diachi"]="";
}
?>
<form action="index.php?mod=banve&group=ga&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã ga</td>
    <td width="77%"><input type="text" name="maga" value="<?php echo $r["maga"];?>"></td>
  </tr>
  <tr>
    <td>Tên ga</td>
    <td><input type="text" name="tenga" value="<?php echo $r["tenga"];?>"></td>
  </tr>
   <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="diachi" value="<?php echo $r["diachi"];?>"></td>
  </tr>
  <tr>
    <td colspan="2">

	<input type="submit" value="Thêm">
  
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>