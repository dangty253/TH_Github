<?php
$Sb = new Ve();
$page = getIndex("page", 1);
$MaPhieuDat=getIndex('MaPhieuDat',"");
$data = $Sb->getfetchPD($MaPhieuDat);

?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
				
						<table>
							
							<thead>
								<tr>
								   <th>Mã vé</th>
								   <th>Mã phiếu đặt</th>
								   <th>Mã chuyến bay</th>
								   <th>Tên hành khách</th>
								   <th>ngày sinh</th>
								   <th>Danh xưng</th>
								   <th>Loại vé</th>
								   <th>Tùy chọn</th>
								</tr>
								
							</thead>
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td><?php echo $r["MaVe"];?></td>
                                    <td><?php echo $r["MaPhieuDat"];?></td>
									<td><?php echo $r["MaChuyenBay"];?></td>
									<td><?php echo $r["TenHanhKhach"];?></td>
									<td><?php echo $r["NgaySinh"];?></td>
									<td><?php echo $r["DanhXung"];?></td>
									<td><?php echo $r["LoaiVe"];?></td>
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=datvemb&group=ve&id=<?php echo $r["MaVe"];?>&MaPhieuDat=<?php echo $MaPhieuDat;?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a href="xulyve.php?c=delete&id=<?php echo $r["MaVe"];?>&MaPhieuDat=<?php echo $MaPhieuDat;?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 
										
									</td>									
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->