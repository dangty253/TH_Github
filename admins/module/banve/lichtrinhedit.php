<?php
$id = Utils::getIndex("id");
$r = $lichtrinh->getById($id);

$tau = new Tau();
$datatau = $tau->getAll();

$tuyen = new Tuyen();
$datatuyen = $tuyen->getAll();


$ac2= "saveEdit";
$info ="Sửa lich trinh!";
if (Count($r)==0) //khong co -> them moi
{
  $ac2="saveAdd";
  $info ="Thêm Mới lịch trình";
  $r["maLT"]="";
  $r["ngaydi"]="";
  $r["giodi"]="";
  $r["ngayden"]="";
  $r["gioden"]="";
  $r["matau"]="";
  $r["maT"]="";
}
?>
<form action="index.php?mod=banve&group=lichtrinh&ac=<?php echo $ac2;?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Mã lịch trình</td>
    <td  width="77%"><input type="text" name="maLT" value="<?php echo $r["maLT"];?>" ></td>
  </tr>
 
  <tr>
    <td> Mã tuyến</td>
    <td><select name="maT">
             <?php 
              foreach( $datatuyen as $row)
              { 
                if ($r["maT"]==$row["maT"]) 
                {
                # code...
                  ?>
                  <option value="<?php echo $row["maT"] ?>" selected><?php echo $row["maT"] ?></option>
                <?php
                } else {
                # code...
                ?>
                  <option value="<?php echo $row["maT"] ?>"><?php echo $row["maT"] ?></option>
                <?php
                }
              }
              ?>
      </select></td>
  </tr>
  <tr>
    <td> Ngày đi</td>
    <td><input type="date" name="ngaydi" value="<?php echo $r["ngaydi"];?>"></td>
  </tr>
    <tr>
    <td> Giờ đi</td>
    <td><input type="time" name="giodi" value="<?php echo $r["giodi"];?>"></td>
  </tr>

  <tr>

  <tr>
    <td> Ngày đến</td>
    <td><input type="date" name="ngayden" value="<?php echo $r["ngayden"];?>"></td>
  </tr>
    <tr>
    <td> Giờ đến</td>
    <td><input type="time" name="gioden" value="<?php echo $r["gioden"];?>"></td>
  </tr>

  <tr>
    <td>Mã tàu</td>
    <td>
        <select name="matau">
          <?php
             foreach( $datatau as $row)
              { 
                if ($r["matau"]==$row["matau"]) 
                {
                # code...
                  ?>
                  <option value="<?php echo $row["matau"] ?>" selected><?php echo $row["matau"] ?></option>
                <?php
                } else {
                # code...
                ?>
                  <option value="<?php echo $row["matau"] ?>"><?php echo $row["matau"] ?></option>
                <?php
                }
              }
              ?>
      </select>
    </td>
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