
				<tr>
					<td colspan="2">
						<hr>
						<h2><?php if(!isset($Cbr)) echo "Chuyến đi";else echo "Chuyến về"; ?></h2>
						
					</td>
				</tr>
				<tr>
					<td colspan="2">

						<h4>Khởi hành <?php $d=$Cb['NgayKhoiHanh'];echo substr($d,-2).substr($d,-6,3)."-".substr($d,0,4) ?></h4>
					</td>
				</tr>
				<tr>
					<td colspan="2"><h4>Hãng máy bay: <?php echo $Cb['TenHangMayBay'] ?></h4></td>
				</tr>
				<tr>
					<td colspan="2"><h4>Hạng ghế: <?php echo $Cb['TenHangGhe'] ?></h4></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;"><h4><?php echo $TenTinhThanh1." → ".$TenTinhThanh2 ?></h4></td>
				</tr>
