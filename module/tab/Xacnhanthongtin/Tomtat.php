<table width="100%" class="xntt">
				<tr>
					<td colspan="3">
						<h2><?php echo $TenTinhThanh1." → ".$TenTinhThanh2 ?></h2>
						<hr>
					</td>
				</tr>
				<tr>
					<td>

						<h4>Khởi hành <?php $d=$Cb['NgayKhoiHanh'];echo substr($d,-2).substr($d,-6,3)."-".substr($d,0,4) ?></h4>
					</td>
				</tr>
				<tr>
					<td ><h4>Hãng máy bay: <?php echo $Cb['TenHangMayBay'] ?></h4></td>
				</tr>
				<tr>
					<td ><h4>Hạng ghế: <?php echo $Cb['TenHangGhe'] ?></h4></td>
				</tr>
				<tr>
					<td style="text-align: center;"><h4><?php echo $Cb['GioKhoiHanh']." (".$TenTinhThanh1.")" ?></h4></td>
				</tr>
				<tr>
					<td style="text-align: center;"><h4>⇩ <?php echo $Cb['ThoiGianBay'] ?></h4></td>
				</tr>
				<tr>
					<td style="text-align: center;"><h4><?php echo $Cb['GioHaCanh']." (".$TenTinhThanh2.")" ?></h4></td>
				</tr>
			</table>