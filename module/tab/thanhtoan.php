<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['datve'])){
	echo "<script type='text/javascript'>alert('Hết thời gian chờ');</script>";
	sleep(2);
	echo "window.location.assign('index.php?tt=$c')";
}
$Hokh=postIndex("Hokh","");
$Tenkh=postIndex("Tenkh","");
$Sdt=postIndex("Sdt","");
$Email=postIndex("Email","");
$_SESSION['KhachHang']=array();
$_SESSION['KhachHang']['Ho']=$Hokh;
$_SESSION['KhachHang']['Ten']=$Tenkh;
$_SESSION['KhachHang']['Sdt']=$Sdt;
$_SESSION['KhachHang']['Email']=$Email;

$_SESSION['HanhKhach']=array();
$dx1=postIndex("dx1","");
$Ho1=postIndex("Ho1","");
$Ten1=postIndex("Ten1","");
$born1 =postIndex("born1","");

$dx2=postIndex("dx2","");
$Ho2=postIndex("Ho2","");
$Ten2=postIndex("Ten2","");
$born2 =postIndex("born2","");

$dx3=postIndex("dx3","");
$Ho3=postIndex("Ho3","");
$Ten3=postIndex("Ten3","");
$born3 =postIndex("born3","");

$_SESSION['HanhKhach']=array();
$_SESSION['HanhKhach']['dx1']=$dx1;
$_SESSION['HanhKhach']['dx2']=$dx2;
$_SESSION['HanhKhach']['dx3']=$dx3;
$_SESSION['HanhKhach']['Ho1']=$Ho1;
$_SESSION['HanhKhach']['Ho2']=$Ho2;
$_SESSION['HanhKhach']['Ho3']=$Ho3;
$_SESSION['HanhKhach']['Ten1']=$Ten1;
$_SESSION['HanhKhach']['Ten2']=$Ten2;
$_SESSION['HanhKhach']['Ten3']=$Ten3;
$_SESSION['HanhKhach']['born1']=$born1;
$_SESSION['HanhKhach']['born2']=$born2;
$_SESSION['HanhKhach']['born3']=$born3;
$id=time() ."_".$Sdt;
$_SESSION['id']=$id;
$datve=$_SESSION['datve'];


//echo "<pre>";
//print_r($Khoihanh);
?>
<form action="xulythanhtoan.php" method="post">
<table  width="100%" >
	<tr>
		<td width="58%" valign="top">
			
		<table width="100%" class="xntt">
			<tr>
				<td><h2>Hình thức thanh toán</h2></td>
			</tr>
			<tr>
				<td><h3><input type="radio" name="pt" disabled> Chuyển khoản</h3></td>
			</tr>
			<tr><td>Ngân hàng liên kết:</td></tr>
			<tr><td > → Vietcombank</td></tr>
			<tr><td> → VietinBank</td></tr>
			<tr><td> → BIDV</td></tr>
			<tr><td> → Techcombank</td></tr>
			<tr><td> → Sacombank</td></tr>
			<tr><td> → ACB</td></tr>
			<tr>
				<td><h3><input type="radio" name="pt" disabled> Tại cửa hàng</h3></td>
			</tr>
			<tr>
				<td>Bạn có thể tiến hành thanh toán tại một trong các cửa hàng sau:</td>
			</tr>
			<tr>
				<td style="text-align: center;"><img src="image/tt.png"></td>
			</tr>
		</table>
		<?php
				$TenTinhThanh1=$datve['SanBayDi'][0]['TenTinhThanh'];
				$TenTinhThanh2=$datve['SanBayDen'][0]['TenTinhThanh'];
				$Cb=$datve['Khoihanh'];
				
				if($_SESSION['datve']['return']!=""){
					$TenTinhThanh1=$datve['SanBayDen'][0]['TenTinhThanh'];
					$TenTinhThanh2=$datve['SanBayDi'][0]['TenTinhThanh'];
					$Cb=$datve['Khuhoi'];
					$Cbr=$datve['Khuhoi'];

				}
				$Cb=$datve['Khoihanh'];
			?>
		<table width="100%" class="xntt" >
				<tr>
					<td colspan="3">
						<h2>Thông tin đặt</h2>
						<hr>
					</td>
				</tr>
				<tr>
					<?php 
						$t=$_SESSION['datve']['tuoi'];
						
					?>
					<td width="65%" ><h4><?php echo $Cb['TenHangMayBay']." (Người lớn) x".$t[0] ?></h4></td>
					<td style="text-align: right;"><?php 
						if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) 
							echo number_format( $Cb['GiaVe']*$t[0]+$Cbr['GiaVe']*$t[0],0, '', '.')." VND";
						else echo number_format( $Cb['GiaVe']*$t[0],0, '', '.')." VND" ;
							
					?></td>
				</tr>
				<?php
				if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
					?>
					<tr>
						<td><h4><?php echo $Cbr['TenHangMayBay']." (Người lớn) x".$t[0] ?></h4></td>
						<td style="text-align: right;"><?php echo number_format($Cbr['GiaVe'],0, '', '.')." VND" ;?></td>
					<?php
				}
				if($t[1]>0){
					?>
					<tr>
						<td><h4><?php echo $Cb['TenHangMayBay']." (Trẻ em) x".$t[1] ?></h4></td>
						<td style="text-align: right;"><?php 
							if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) echo number_format( $Cb['GiaVe']*0.9*$t[1]+$Cbr['GiaVe']*0.9*$t[1],0, '', '.')." VND";
							else echo number_format($Cb['GiaVe']*0.9*$t[1],0, '', '.')." VND" ;
					?></td>
					</tr>
					<?php
					if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
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
							if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']==$Cbr['TenHangMayBay']) echo number_format($Cb['GiaVe']*0.1*$t[2]+$Cbr['GiaVe']*0.1*$t[2],0, '', '.')." VND";
							else echo number_format($Cb['GiaVe']*0.1*$t[2],0, '', '.')." VND" ;
					?></td>
					</tr>
					<?php
					if($_SESSION['datve']['return']!="" && $Cb['TenHangMayBay']!=$Cbr['TenHangMayBay']){
					?>
					<tr>
						<td><h4><?php echo $Cbr['TenHangMayBay']." (Em bé) x".$t[2] ?></h4></td>
						<td style="text-align: right;"><?php echo number_format($Cbr['GiaVe']*0.1*$t[2],0, '', '.')." VND" ;?></td>
					<?php
					}	
				}
				?>
					<tr>
						<td style="text-align: center;"><h4>Tổng tiền : </h4></td>
						<td style="text-align: right;"><?php echo number_format($_SESSION['datve']['price'],0, '', '.')." VND" ;
					?></td>
					</tr>
			</table>
			<table width="100%">
				<tr>
					<td align="center"><input type="submit" name="submitxacnhan" value="Thanh toán"></td>
				</tr>
			</table>
			
		</td>
		<td width="1%" style="visibility: hidden;">&nbsp;</td>
		<td valign="top" >
			<table width="100%" class="xntt">
				<tr><td colspan="2" ><h2>Mã Đặt chỗ</h2></td></tr>
				<tr><td colspan="2" ><h3><?php echo $id; ?></h3></td></tr>
				<tr>
					<td colspan="2">Khách hàng: <?php echo $Hokh." ".$Tenkh; ?></td>
				</tr>
				<tr>
					<td colspan="2">Số điện thoại: <?php echo $Sdt; ?></td>
				</tr>
				<tr>
					<td colspan="2" style="font-size: 17px">Email: <?php echo $Email; ?></td>
				</tr>
			<?php
				if(isset($Cbr)) unset($Cbr);
				$TenTinhThanh1=$datve['SanBayDi'][0]['TenTinhThanh'];
				$TenTinhThanh2=$datve['SanBayDen'][0]['TenTinhThanh'];
				$Cb=$datve['Khoihanh'];
				include ROOT."/module/tab/Thanhtoan/TomtatThanhtoan.php";
				if($_SESSION['datve']['return']!=""){
					$TenTinhThanh1=$datve['SanBayDen'][0]['TenTinhThanh'];
					$TenTinhThanh2=$datve['SanBayDi'][0]['TenTinhThanh'];
					$Cb=$datve['Khuhoi'];
					$Cbr=$datve['Khuhoi'];
					include ROOT."/module/tab/Thanhtoan/TomtatThanhtoan.php";

				}
				$Cb=$datve['Khoihanh'];
			?>
			</table>
			<table width="100%" class="xntt" >
				<tr>
					<td colspan="3">
						<h2>Hành Khách</h2>
						<hr>
					</td>
				</tr>
				<?php 
					$t=$_SESSION['datve']['tuoi'];
					for($i=0;$i<$t[0];$i++){
					?>
					<tr>
						<td colspan="2"><h4><?php echo $dx1[$i]." ".$Ho1[$i]." ".$Ten1[$i] ?></h4></td>
						<td style="text-align: right;"><h4>Người lớn</h4></td>
					</tr>	
					<?php
					}
					for($i=0;$i<$t[1];$i++){
					?>
					<tr>
						<td colspan="2"><h4><?php echo $dx2[$i]." ".$Ho2[$i]." ".$Ten2[$i] ?></h4></td>
						<td style="text-align: right;"><h4>Trẻ em</h4></td>
					</tr>
					<?php
					}
					for($i=0;$i<$t[2];$i++){
					?>
					<tr>
						<td colspan="2"><h4><?php echo $dx3[$i]." ".$Ho3[$i]." ".$Ten3[$i] ?></h4></td>
						<td style="text-align: right;"><h4>Em bé</h4></td>
					</tr>
					<?php	
					}
				?>

			</table>
			
		</td>
	</tr>
</table>
</form>