<?php
for($i=1;$i<=$n;$i++){
				?>
				<table width="100%" class="xntt">
					<tr>
						<td colspan="2"><h2><?php echo $l.$i ?></h2></td>
					</tr>
					<tr><td colspan="2">Danh xưng</td></tr>
					<tr><td colspan="2">
						<select name="dx<?php echo $stt ?>[]">
						  <option value="Ông">Ông</option>
						  <option value="Bà">Bà</option>
						  <option value="Cô">Cô</option>
						</select>
					</td></tr>
					<tr>
						<td>Họ</td>
						<td>Tên</td>
					</tr>
					<tr>
						<td><input type="text" name="Ho<?php echo $stt?>[]" required></td>
						<td><input type="text" name="Ten<?php echo $stt?>[]" required></td>
					</tr>
					<tr>
						<td colspan="2">Ngày sinh</td>
					</tr>
					<tr><td colspan="2">
						<input type="date" id="start" name="born<?php echo $stt ?>[]" value="<?php echo date('Y')-$max?>-01-01" min="<?php echo date('Y')-$min?>-01-01" max="<?php echo date('Y')-$max?>-12-31">

					</td></tr>
					<tr>
						<td colspan="2" style="color: #bbbaba">
							<?php if($stt==1) echo 'Hành khách người lớn(trên 12 tuổi)';
							else if($stt==2) echo 'Hành khách trẻ em(từ 2 - 11 tuổi)';
							else echo 'Hành khách em bé(dưới 2 tuổi)';
							?>
						</td>
					</tr>
				</table>

				<?php

}
