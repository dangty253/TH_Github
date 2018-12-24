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
    <td width="77%"><input type="text" name="MaTuyenBay" value="<?php echo $MaTuyenBay;?>" maxlength="6"></td>
  </tr>
  
  <tr>
    <td>Mã sân bay đi</td>
    <td><input type="text" name="MaSanBayDi" value="<?php echo $MaSanBayDi;?>" maxlength="3"></td>
  </tr>
    <tr>
    <td>Mã sân bay đến</td>
    <td><input type="text" name="MaSanBayDen" value="<?php echo $MaSanBayDen;?>" maxlength="3"></td>
  </tr>

  <tr>
    <td>Các mã sân bay hợp lệ</td>
    <td><table id="idxp" class="dropdown-content"> 
          <?php
          $Cb = new Sanbay();
      $arrCb = $Cb->getall();
          foreach ($arrCb as $i => $v) {
            if($i%3==0) echo"<tr>";
            echo "<td>{$v['MaSanBay']}</td>";
            if($i%3==2) echo"</tr>";
          }
          ?> 
        </table></td>
  </tr>
  <tr>
    
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