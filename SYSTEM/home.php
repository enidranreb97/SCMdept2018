<?php include"header.php"; ?>


		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">
<!--
						<ul class="widget widget-menu unstyled">
                                <li><a href="home.php"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>                        						
						</ul>
-->
						<ul class="widget widget-menu unstyled" style="background:#CCCCCC;padding:10px;">
							<li style="background-color:#fff;border-radius:5px;padding:3px;">
								<?php
									$query = "$project_count_query";
									$result = mysql_query($query) or die(mysql_error());
										while($row = mysql_fetch_array($result))
										{
										list($pcount) = $row;	
										}
								?>
								<p>
									<strong> &nbsp;&nbsp;Total 	
								<?php
								if($perm == 1)
									{
									echo"Projects";
									}
								else
									{
									echo"Task";
									}
								?>
								</strong>  <b>(<?php echo $pcount?>)</b>
									<span class="pull-right small muted"><img src="img/ok.gif" style="width:30px;height:32px;margin-right:5px;margin-top:-3px;"/></span>
								</p>
								
								<div class="progress tight">
									<div class="bar" style="width: 100%;"></div>
								</div>
							</li>
						<!--Project count -->
							<?php
								include"count.php";
							?>
						<!--End count -->
						</ul>
					</div>
				</div>
		<!--Modal-->	
			<?php
				include"progress_bar.php";
			?>
		<!--End Modal-->	

		<div class="span9">
			<div class="content">
				<div class="module">
					<div class="module-head">
						<h3 style="">Production
						<?php	
							if($perm == 1)
							{
								echo"<a href ='#newproject'>
									<img src='img/add.gif' style='width:35px;height:35px;margin-left:77%;margin-top:-6px;' title='New Project' /> 
									+Production</a>";
							}
						?>
						</h3>
					</div>
	<!--New Project-->	
			<div id="newproject" class="modal-box2">
				<div>
					<a href="#close" title="Close" class="modal-close align center">x</a>
						<?php include"new_project.php"; ?>
				</div>
			</div>		
	<!--End New Project-->				
					
					
	<!--Filter Maintask-->	
					<div id="listing">	
						<table id="myTable2" class="table table-striped" >
							<tr><th width="8px">Prod #</th><th>Production Title</th><th>Employee</th><th>Description</th><th width="78px">Type</th><th>Cost</th><th>Warehouse</th><th>Start Date</th><th>End Date</th><th width="70px">Status</th><th colspan="2"><?php echo $action ?></th></tr>

							<?php	
							$n = 0;
							$query = mysql_query("$global_query_project") or die(mysql_error());
							while($row = mysql_fetch_array($query))
							{
							list($id,$pname,$pdesc,$cat,$cost,$comname,$comno,$sdate,$edate,$progress,$pm) = $row;
							$n = $n + 1;  
							echo  "<tr><td><b> $n. </b></td>";
					// director			
							if($perm == 3)
							{
							echo  "<td> $pname </td>"; 
							}
							else
							{
								//	echo  "<td style='width:17%'> <a href ='scopeList.php?pk_ID=$id'>$pname</a>"; 
									echo  "<td style='width:17%'><a href='#' class='toggle' data-target='details-$id'> $pname</a> </td>"; 
							}
							echo  "<td> $pm </td>"; 
							echo  "<td> $pdesc </td>"; 
							echo  "<td> $cat </td>"; 
							echo  "<td> $cost </td>"; 
							echo  "<td> $comname </td>";
							echo  "<td> $sdate </td>"; 
							echo  "<td> $edate </td>"; 
							echo  "<td> $progress </td>";
							echo  " <td align='center' style='width:$width%'>";
							if($perm == 1)
							{
							?>
								<a href ="edit_register.php?pk_ID=$id"><img src="img/edit.png" style="width:20px;height:22px;" title="Modify" /></a>
								<a href ="del_register.php?<?php echo"pk_ID=$id"?>"  onclick="return confirm('Are you sure you want to continue?')" ><img src="img/del.png" style="width:22px;height:22px;" title="Delete"/></a>
							<?php
							}
							else
							{
							echo"$dept";
							}
							echo  "</td>";
							echo "</tr>"; 
						if($perm == 1)
							{	
								echo"<tr class='details-$id'  style='display: none'>
								<td><label class='vertical'>Main Task</label></td><td colspan='9'>";
							//	<td><label class='vertical'>$pname</label></td><td colspan='9'>
							}	
						else
							{	
								echo"<tr class='details-$id'  style='display: none'>
								<td><label class='vertical'>Main Task</label></td><td colspan='10'>";
							//	<td><label class='vertical'>$pname</label></td><td colspan='10'>
							}	
		//Filter Subtask					
							echo"
							<div id='listing2'>	";
				//Maintask			
							echo"
								<table id='myTable2'>
								<tr><th width='8px'>#</th><th>Main Task</th><th>Description</th><th>StartDate</th><th>EndDate</th><th>Status</th>";
											if($perm == 1){echo"<th><a href ='#newTask$id'><img src='img/add.png' style='width:23px;height:20px;' title='Add Maintask' /></a></th>";}echo"</tr>";
								
									?><tr><td>
									<!--New Task-->	
											<div id="newTask<?php echo $id ?>" class="modal-box2">
												<div>
													<a href="#close" title="Close" class="modal-close align center">x</a>
														<?php include"new_task.php"; ?>
												</div>
											</div>		
									<!--End New Task-->
										</td></tr>
									<?php
								$sn = 0;
								$querys = mysql_query("$global_query_mt  S.pk_ID = $id") or die(mysql_error());
								while($rows = mysql_fetch_array($querys))
									{
									list($mt_id,$mt,$mtdesc,$mtsdate,$mtedate,$mtprogress,$mtseq,$pm) = $rows;
									$sn = $sn + 1;  
										echo"
										<tr>
										<td><b> $sn. </b></td><td width='25%'><a href='#' class='toggle' data-target='details2-$mtseq'>$mt</a></td><td>$mtdesc</td><td>$mtsdate</td><td>$mtedate</td><td>$mtprogress</td>";
										
												if($perm == 1)
												{
												echo  " <td align='center' style='width:46px'>";
												?>
													<a href ="edit_mt.php?pk_ID=$id"><img src="img/edit.png" style="width:20px;height:22px;" title="Modify" /></a>
													<a href ="del_mt.php?<?php echo"pk_ID=$id"?>"  onclick="return confirm('Are you sure you want to continue?')" ><img src="img/del.png" style="width:22px;height:22px;" title="Delete"/></a>
												<?php
												}
												echo  "</td>";
										echo  
										"</tr>";
				//Subtask						
										echo"
										<tr class='details2-$mtseq' style='display: none'>
										<td><label class='vertical'>Sub Task</label></td><td colspan='5'>";
									//	<td><label class='vertical'>$mt</label></td><td colspan='5'>
										
											echo"
											<table id='myTable2'>
											<tr><th width='8px'>#</th><th>Sub Task</th><th>Name</th><th>StartDate</th><th>EndDate</th><th>Status</th>";
											if($perm == 1){echo"<th><a href ='#newSubtask$mtseq'><img src='img/add2.png' style='width:27px;height:20px;' title='Assign Subtask' /></a></th>";}else {echo"<th></th>";}echo"</tr>";
												
												?><tr><td>
												<!--New SubTask-->	
														<div id="newSubtask<?php echo $mtseq ?>" class="modal-box2">
															<div>
																<a href="#close" title="Close" class="modal-close align center">x</a>
																	<?php include"new_subtask.php"; ?>
															</div>
														</div>		
												<!--End New SubTask-->
													</td></tr>
												<?php
												$stn = 0;
												$queryst = mysql_query("SELECT * FROM task where pk_ID=$id and scope_no=$mtseq $content") or die(mysql_error());
												while($rowst = mysql_fetch_array($queryst))
													{
													list($p_id,$st,$stname,$stsdate,$stedate,$ststatus,$smtseq,$seqid) = $rowst;
													$stn = $stn + 1;  
													echo"<tr><td><b> $stn. </b></td><td>$st</td><td>$stname</td><td>$stsdate</td><td>$stedate</td><td>$ststatus</td>";
													
													if($perm == 1){
													echo  " <td align='center' style='width:46px'>";
													?>
														<a href ="edit_mt.php?pk_ID=$id"><img src="img/edit.png" style="width:20px;height:22px;" title="Modify" /></a>
														<a href ="del_mt.php?<?php echo"pk_ID=$id"?>"  onclick="return confirm('Are you sure you want to continue?')" ><img src="img/del.png" style="width:22px;height:22px;" title="Delete"/></a>
													<?php
													}
													else 
													{
													echo  " <td align='center' style='width:4%'>";
													?>
														<a href ="edit_mt.php?pk_ID=$id"><img src="img/edit.png" style="width:20px;height:22px;" title="Modify" /></a>
													<?php
													}
													echo  "</td>";
													echo  "</tr>";
													}
											echo"</table>";
										echo"
										</td></tr>
										";
									}
							echo"
								</table>
							</div>";
							echo"</td></tr>";
							}
							?>	
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="footer">
		<div class="container">
	</div>
</body>
</html>