<?php
$id = Utils::getIndex("id");
$r = $tuyen->getById($id);

$ga = new Ga();
$dataga = $ga->getAll();

$lichtrinh = new LichTrinh();
$datalt = $lichtrinh->getAll();

$ac2= "saveEdit";
$info ="Sửa Tuyến!";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
  $info ="Thêm tuyến mới";
  $r["maT"]="";
  $r["TenT"]="";
  //$r["maLT"]="";
}
?>
<form action="index.php?mod=banve&group=tuyen&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã tuyến</td>
    <td  width="77%"><input type="text" name="maT" value="<?php echo $r["maT"];?>"></td>
  </tr>
 
  <tr>
    <td> Tên Tuyến</td>

    <td>
      <input type="text" name="TenT" value="<?php echo $r["TenT"];?>" >
    </td>
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

