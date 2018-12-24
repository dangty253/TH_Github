<?php
$id = Utils::getIndex("id");
$r = $tau->getById($id);
$ac2= "saveEdit";
$info ="Sửa tau!";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
	$info ="Thêm Mới tau";
	$r["matau"]="";
	$r["tentau"]="";
}
?>
<form action="index.php?mod=banve&group=tau&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã tàu</td>
    <td width="77%"><input type="text" name="matau" value="<?php echo $r["matau"];?>" ></td>
  </tr>
  
  <tr>
    <td>Tên tàu</td>
    <td><input type="text" name="tentau" value="<?php echo $r["tentau"];?>"></td>
  </tr>
  <tr>
    <td colspan="2">
  <input type="submit" value="Sửa">
	<?php
    
	?></td>
    </tr>
</table>
</fieldset>
</form>