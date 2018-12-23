<?php
$id = getIndex("id","");
$c = getIndex("c","");
if($c=='add') echo "<script type='text/javascript'>alert('Đã Thêm');</script>";
else if ($c=='update') echo "<script type='text/javascript'>alert('Đã cập nhật');</script>";
else if ($c=='delete') echo "<script type='text/javascript'>alert('Đã xóa');</script>";

$Sb= new Admin();
if ($id=="") //khong co -> them moi
{
  $c='add';
	$info ="Thêm";
	$username="";
	$Password="";
  $Ten="";
  $SoDienThoai="";
  $Email="";
}
else
{
  $r = $Sb->Getfetch($id);
  $c='update';
  $info ="Sửa";
  $username=$r["username"];
  $Password=$r["Password"];
  $Ten=$r["Ten"];
  $SoDienThoai=$r["SoDienThoai"];
  $Email=$r["Email"];
}

?>
<form action="xulyadmin.php?c=<?php echo $c ?>" method="post">
<fieldset>
<legend><?php echo $info;?></legend>
<table width="50%" border="1" cellspacing="3">
  <tr>
    <td width="23%">Username</td>
    <td width="77%"><input type="text" name="username" value="<?php echo $username;?>"></td>
  </tr>
  
  <tr>
    <td>Password</td>
    <td><input type="text" name="Password" value="<?php echo $Password;?>"></td>
  </tr>    
  <tr>
    <td>Tên</td>
    <td><input type="text" name="Ten" value="<?php echo $Ten;?>"></td>
  </tr>
    <tr>
    <td>Số điện thoại</td>
    <td><input type="text" name="SoDienThoai" value="<?php echo $SoDienThoai;?>"></td>
  </tr>

    <tr>
    <td>Email</td>
    <td><input type="text" name="Email" value="<?php echo $Email;?>"></td>
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