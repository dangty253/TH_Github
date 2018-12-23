<?php
if(!isset($_SESSION)) session_start();
$datve=$_SESSION['datve'];
$c=getIndex("c","mac1");
$_SESSION['datve']["mac1"]=$c;
if ($c=="mac1"){
	$SanBayDi=$datve['SanBayDi'];
	$SanBayDen=$datve['SanBayDen'];
	$Cb = new Chuyenbay();
	$date=$datve['datexp'];
	$arrCb = $Cb->searchCB($SanBayDi[0]['MaSanBay'],$SanBayDen[0]['MaSanBay'],$date,$datve['hangghe']);
	$_SESSION['datve']['arrCb1']=$arrCb;
}
else{ 
	$datve=$_SESSION['datve'];
	$date=$datve['return'];
	$SanBayDi=$datve['SanBayDen'];
	$SanBayDen=$datve['SanBayDi'];
	$Cb = new Chuyenbay();
	$arrCb = $Cb->searchCB($SanBayDi[0]['MaSanBay'],$SanBayDen[0]['MaSanBay'],$date,$datve['hangghe']);
	$_SESSION['datve']['arrCb2']=$arrCb;
}

?>
<table class="table borderless col-md-12 col-xs-4">
	<tr>
		<td>
			<p id="tuyen"> <?php echo $SanBayDi[0]['TenTinhThanh']."(".$SanBayDi[0]['MaSanBay'].")"."-".$SanBayDi[0]['TenSanBay']." → ".$SanBayDen[0]['TenTinhThanh']."(".$SanBayDen[0]['MaSanBay'].")"."-".$SanBayDen[0]['TenSanBay'] ?></p>
			<p id="thongtin"><?php echo $date." | ".$datve['tuoi'][0]." người lớn ";
			if($datve['tuoi'][1]>0) echo " | ".$datve['tuoi'][1]." người trẻ em ";
			if($datve['tuoi'][2]>0) echo " | ".$datve['tuoi'][2]." người em bé ";
			if($datve['hangghe']=="Eco") echo " | Phổ thông";
			else if($datve['hangghe']=="Bus") echo " | Thương gia";
			else if($datve['hangghe']=="Fcl") echo " | Hạng nhất";
			else echo " | Phổ thông đặc biệt";
			?>	
			</p>
		</td>
	</tr>
	<tr>
		<td>
			<table class="table cb col-md-12 col-xs-4">
				<tr>
					<td>Hãng</td>
					<td>Giờ khởi hành</td>
					<td>Giờ đến</td>
					<td>Thời gian bay</td>
					<td></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<?php
			foreach ($arrCb as $i => $v) {
				?>
				<table class="chuyenbay col-md-12 col-xs-4">
					<tr>
						<td><?php echo $v['TenHangMayBay'] ?></td>
						<td>
							<p><?php echo $v['GioKhoiHanh'] ?></p>
							<p><?php echo $SanBayDi[0]['TenSanBay'] ?></p>
						</td>
						<td>
							<p><?php echo $v['GioHaCanh'] ?></p>
							<p><?php echo $SanBayDen[0]['TenSanBay'] ?></p>
						</td>
						<td><?php echo $v['ThoiGianBay'] ?></td>
						<td>
							<p><?php echo $v['GiaVe']."VND" ?></p>
							<input  type="button"  value="Chọn" onclick="chon('<?php echo $v['MaChuyenBay']; ?>')" class="btn btn-warning">
						</td>
					</tr>
				</table>
				<?php
        	}
			?>
		</td>
	</tr>
	
</table>
<script type="text/javascript">
	function chon(s){
		
		<?php 
		$base = new Base();
		$url= 'chuyen-bay-khu-hoi-'.$base->striptitle($SanBayDi[0]['TenTinhThanh']).'-'.$base->striptitle($SanBayDen[0]['TenTinhThanh']).'-' ;
		if($_SESSION['datve']['return']=="" || $c!="mac1"){ 
			echo "window.location.assign('thong-tin-'+s+'.html')";
		}
		else {
	
			echo "window.location.assign('$url'+s+'.html')";
		}
		?>
	}
</script>