<?php
$id = Utils::getIndex("id");
$r = $chitiettuyen->getById($id);

$ga = new Ga();
$dataga = $ga->getAll();

$tuyen = new Tuyen();
$datatuyen = $tuyen->getAll();


$ac2= "saveEdit";
$info ="Sửa chi tiết tuyến!";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
	$info ="Thêm Mới chi tiết tuyến";
	$r["maT"]="";
  $r["maga"]="";
  $r["vitri"]="";
}
?>
<form action="index.php?mod=banve&group=chitiettuyen&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã tuyến</td>
    <td  width="77%"><select name="maT">
             <?php 
              foreach( $datatuyen as $row)
              {?>
               <option value="<?php echo $row["maT"] ?>"><?php echo $row["maT"] ?></option>
                <?php
              }
                ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>Mã ga</td>
    <td>
        <select name="maga">
             <?php 
              foreach( $dataga as $row)
              {?>
               <option value="<?php echo $row["maga"] ?>"><?php echo $row["maga"] ?></option>
                <?php
              }
                ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Vị Trí</td>
    <td>
      <select name="vitri">
        <option value="-1">Ga đi</option>
        <option value="0">Ga đến</option>
        <option value="1">Ga trung gian</option>
      </select>
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