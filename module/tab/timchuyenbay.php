<?php
if(!isset($_SESSION)) session_start();
if (!isset($_SESSION['datve'])) 
	$_SESSION['datve'] = array();
$c=getIndex("c","mac1");
$_SESSION['datve']["mac1"]=$c;
if ($c=="mac1"){
	$datve = array();
	$datve['submitTim']=postIndex("submitTim","");
	$datve['dxp']=postIndex("dxp","");
	$datve['dd']=postIndex("dd","");
	$datve['datexp']=postIndex("datexp","");
	$datve['return']=postIndex("return","");
	$datve['hangghe']=postIndex("hangghe","");
	$datve['tuoi']=postIndex("tuoi",array());

	$Cb = new Sanbay();
	$SanBayDi=$Cb->masanbay($datve['dxp']);
	$SanBayDen=$Cb->masanbay($datve['dd']);
	$datve['SanBayDi']=$SanBayDi;
	$datve['SanBayDen']=$SanBayDen;
	$_SESSION['datve']=$datve;
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
<table width="100%">
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
			<table class="chuyenbay">
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
				<table class="chuyenbay">
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
							<input type="button"  value="Chọn" onclick="chon('<?php echo $v['MaChuyenBay']; ?>')">
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
		if($_SESSION['datve']['return']=="" || $c!="mac1"){ 
			echo "window.location.assign('index.php?tt='+s)";
		}
		else {
	
			echo "window.location.assign('index.php?c='+s)";
		}
		?>
	}
</script>