<?php
if(!isset($_SESSION)) session_start();

$c=getIndex("tt","");
if($_SESSION['datve']['return']=="") {
	$_SESSION['datve']['mac1']=$c;
	$c="mac1";
}
else {
	$_SESSION['datve']['mac2']=$c;
	$c="mac2";
}
$Khoihanh=array();
foreach ($_SESSION['datve']['arrCb1'] as $k => $v) {
	if($v['MaChuyenBay']==$_SESSION['datve']['mac1']) {
		$Khoihanh=$v;
		break;
	}
}
$_SESSION['datve']['Khoihanh']=$Khoihanh;
if($c=="mac2"){
	$Khuhoi=array();
	foreach ($_SESSION['datve']['arrCb2'] as $k => $v) {
		if($v['MaChuyenBay']==$_SESSION['datve']['mac2']) {
			$Khuhoi=$v;
			break;
		}
	}
	$_SESSION['datve']['Khuhoi']=$Khuhoi;
}
$datve=$_SESSION['datve'];
$_SESSION['datve']['price']=0;
if (isset($_SESSION["khachhang_data"])) {
	$kh=$_SESSION["khachhang_data"];
	foreach (str_word_count($kh['HoTen'],2) as $key => $value) {
		if($key!=0) {
			$k=$key;
			break;
		}
	}
}
else $kh="";
?>

<form action="index.html" method="post" id="js">
<table class="table borderless col-md-12 col-xs-4">
	<tr>
		<td>
			<h2>Thông tin liên hệ</h2>
			
			<table class="xntt">
				<tr>
					<td>Họ</td>
					<td>Tên</td>
				</tr>
				<tr>
					<td><input  type="text" name="Hokh" value="<?php if ($kh!="") echo mb_substr($kh['HoTen'],0,$k-1) ?>"  required></td>
					<td><input  type="text" name="Tenkh" value="<?php if ($kh!="") echo mb_substr($kh['HoTen'],$k) ?>"  required></td>
				</tr>
				<tr>
					<td>Số điện thoại </td>
					<td>Email</td>
				</tr>
				<tr>
					<td><input  type="text" name="Sdt" value="<?php if ($kh!="") echo $_SESSION["khachhang_data"]['SoDienThoai']; ?>" </td>
					<td><input  type="text" name="Email" value="<?php if ($kh!="") echo $_SESSION["khachhang_data"]['Email']; ?>" ></td>
				</tr>
			</table>

			<h2>Thông tin hành khách</h2>
			<?php
			$n=$_SESSION['datve']['tuoi'][0];
			$l="Người lớn ";$stt=1;$min=100;$max=12;
			include ROOT."/module/tab/Xacnhanthongtin/HanhKhach.php";
			$n=$_SESSION['datve']['tuoi'][1];
			$l="Trẻ em ";$stt=2;$min=12;$max=2;
			include ROOT."/module/tab/Xacnhanthongtin/HanhKhach.php";
			$n=$_SESSION['datve']['tuoi'][2];
			$l="Em bé ";$stt=3;$min=2;$max=0;
			include ROOT."/module/tab/Xacnhanthongtin/HanhKhach.php";

			?>
	</td>
		
		<td>
			<h2>Thông tin vé đặt</h2>
			<?php
				$TenTinhThanh1=$datve['SanBayDi'][0]['TenTinhThanh'];
				$TenTinhThanh2=$datve['SanBayDen'][0]['TenTinhThanh'];
				$Cb=$Khoihanh;
				include ROOT."/module/tab/Xacnhanthongtin/Tomtat.php";
				if($c=="mac2"){
					$TenTinhThanh1=$datve['SanBayDen'][0]['TenTinhThanh'];
					$TenTinhThanh2=$datve['SanBayDi'][0]['TenTinhThanh'];
					$Cb=$Khuhoi;
					$Cbr=$Khuhoi;
					include ROOT."/module/tab/Xacnhanthongtin/Tomtat.php";

				}
				$Cb=$Khoihanh;
			?>	
			

			<table class="xntt">
				<h2>Thông tin đặt</h2>
				
					<?php 
						$t=$_SESSION['datve']['tuoi'];
						if($c=="mac2") $_SESSION['datve']['price']+=$Cb['GiaVe']*$t[0]+$Cb['GiaVe']*$t[1]*0.9+$Cb['GiaVe']*$t[2]*0.1+$Cbr['GiaVe']*$t[0]+$Cbr['GiaVe']*$t[1]*0.9+$Cbr['GiaVe']*$t[2]*0.1;
						else $_SESSION['datve']['price']+=$Cb['GiaVe']*$t[0]+$Cb['GiaVe']*$t[1]*0.9+$Cb['GiaVe']*$t[2]*0.1;
					?>
					
					<td><h4><?php echo $Cb['TenHangMayBay']." (Người lớn) x".$t[0] ?></h4></td>
					<td style="text-align: right;"><?php 
						if($c=="mac2" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) 
							echo number_format( $Cb['GiaVe']*$t[0]+$Cbr['GiaVe']*$t[0],0, '', '.')." VND";
						else echo number_format( $Cb['GiaVe']*$t[0],0, '', '.')." VND" ;
							
					?></td>
				<?php
				if($c=="mac2" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
					?>
					<tr>
						<td><h4><?php echo $Cbr['TenHangMayBay']." (Người lớn) x".$t[0] ?></h4></td>
						<td style="text-align: right;"><?php echo number_format($Cbr['GiaVe']*$t[0],0, '', '.')." VND" ;?></td>
					<?php
				}
				if($t[1]>0){
					?>
					<tr>
						<td><h4><?php echo $Cb['TenHangMayBay']." (Trẻ em) x".$t[1] ?></h4></td>
						<td style="text-align: right;"><?php 
							if($c=="mac2" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) echo number_format( $Cb['GiaVe']*0.9*$t[1]+$Cbr['GiaVe']*0.9*$t[1],0, '', '.')." VND";
							else echo number_format($Cb['GiaVe']*0.9*$t[1],0, '', '.')." VND" ;
					?></td>
					</tr>
					<?php
					if($c=="mac2" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
					?>
					<tr>
						<td><h4><?php echo $Cbr['TenHangMayBay']." (Trẻ em) x".$t[1] ?></h4></td>
						<td style="text-align: right;"><?php echo number_format($Cbr['GiaVe']*0.9*$t[1],0, '', '.')." VND" ;?></td>
					<?php
					}
				}
				if($t[2]>0){
					?>
					<tr>
						<td><h4><?php echo $Cb['TenHangMayBay']." (Em bé) x".$t[2] ?></h4></td>
						<td style="text-align: right;"><?php 
							if($c=="mac2" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) echo number_format($Cb['GiaVe']*0.1*$t[2]+$Cbr['GiaVe']*0.1*$t[2],0, '', '.')." VND";
							else echo number_format($Cb['GiaVe']*0.1*$t[2],0, '', '.')." VND" ;
					?></td>
					</tr>
					<?php
					if($c=="mac2" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
					?>
					<tr>
						<td><h4><?php echo $Cbr['TenHangMayBay']." (Em bé) x".$t[2] ?></h4></td>
						<td style="text-align: right;"><?php echo number_format($Cbr['GiaVe']*0.1*$t[2],0, '', '.')." VND" ;?></td>
					<?php
					}	
				}
				?>
					<tr>
						<td ><h4>Tổng tiền : </h4></td>
						<td style="text-align: right;"><?php echo number_format($_SESSION['datve']['price'],0, '', '.')." VND" ;
					?></td>
					</tr>
				</td>
			</table>
			<input class="btn btn-warning" type="submit" name="submitxacnhan" value="Xác nhận" >
		</td>
	</tr>
</table>
</form>

				<script type="text/javascript">
				$(document).ready(function() {
				    $("#js").validate({
				                rules: { 
				                	Hokh: "required",                                         
				                    Tenkh: "required", 
				                    Sdt: {
			                            required: true,
			                            number:true,			                            
			                            minlength: 10,

			                        },
			                        Email: {
			                            required: true,
			                            email:true,
			                        },                                                       
				                    'Ho1[]': "required",                                         
				                    'Ten1[]': "required",
				                    'Ho2[]': "required",                                         
				                    'Ten2[]': "required",
				                    'Ho3[]': "required",                                         
				                    'Ten3[]': "required",
				                    
				                },
				                messages: {  
				                	Hokh:'Vui lòng nhập Họ',                           
				                    Tenkh:'Vui lòng nhập Tên',
				                    Sdt: {
			                            required: 'Vui lòng nhập',
			                       		number:'Chỉ được nhập số',
			                            minlength: 'Có ít nhất 10 số',

			                        },
			                        Email: {
			                            required: 'Vui lòng nhập email',
			                            email:'Sai định dạng email',
			                        },                 
				                    'Ho1[]':'Vui lòng nhập Họ',                           
				                    'Ten1[]':'Vui lòng nhập Tên',
				                    'Ho2[]':'Vui lòng nhập Họ',                           
				                    'Ten2[]':'Vui lòng nhập Tên',
				                    'Ho3[]':'Vui lòng nhập Họ',                           
				                    'Ten3[]':'Vui lòng nhập Tên',
				                      
				                }
					});
				});
				</script>
