<?php
$data = $ga->getAll();//return $this->exeQuery("select * from publisher");
?>
<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
						
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã Ga</th>
								   <th>Tên Ga</th>

								   <th>Địa chỉ</th>
								  
								   <th>Thao tác</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
										
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
                            <?php 
							foreach( $data as $r)
							{?>
								<tr>
									<td>
										<input type="checkbox" />
									</td>
									<td>
										<a href="#" title="title"><?php echo $r["maga"];?>
                                    	</a>
                                    </td>
									<td>
										<a href="#" title="title"><?php echo $r["tenga"];?>
                                    	</a>
                                    </td>
                                    <td>
										<a href="#" title="title"><?php echo $r["diachi"];?>
                                    	</a>
                                    </td>
                                   
									<td>
										<!-- Icons -->
										 <a href="index.php?mod=banve&group=ga&ac=edit&id=<?php echo $r["maga"];?>" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>&nbsp;&nbsp;
										 <a href="index.php?mod=banve&group=ga&ac=delete&id=<?php echo $r["maga"];?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										
									</td>
								</tr>
								<?php
							}
								?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->