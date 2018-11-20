<html lang="en">
<?php session_start(); include"dbcon/mydbconn.php";?>
<?php include"header.php"?>
<body>
<div class="wrapper">
	<?php include"sidebar.php"?>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">PRODUCTION</a>
                </div>
				<?php include"dropp.php"?>
            </div>
        </nav>
		<div class="header">
			<nav class="navbar navbar-default navbar-fixed-bottom"  >
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
							<li class="scroll active" ><a href="#sched"> SCHEDULE </a></li>
						</u>
						<ul class="nav navbar-nav navbar-left">
							<li class="scroll" ><a href="#ware"> WAREHOUSE </a></li>
						</u>
						<ul class="nav navbar-nav navbar-left">
							<li class="scroll" ><a href="#manf"> MANUFACTURING </a></li>
						</u>
						<ul class="nav navbar-nav navbar-left">
							<li class="scroll" ><a href="#log"> LOGISTICS </a></li>
						</u>
						<ul class="nav navbar-nav navbar-left">
							<li class="scroll" ><a href="#trans"> TRANSPORTATION </a></li>
						</u>									
					</div>	
			</nav>
        </div>
		<div class="content">
            <div class="container-fluid">
                <div class="row">
<!--SCHEDULE-->                    
					<div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">				
								<section id="sched">
									<div class="header">
										<h4 class="title">SCHEDULE</h4>
										<p class="category">Here is a subtitle for this table</p>
									</div>
									<table class="table table-hover table-striped">
										<thead>
											<th>ID</th>
											<th>Name</th>
											<th>Salary</th>
											<th>Country</th>
											<th>City</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
										</tbody>
									</table>
								</section>
                            </div>
                        </div>
                    </div>		
<!--WAREHOUSE-->					
					<div class="col-md-12">
					    <div class="card card-plain">
                            <div class="content table-responsive table-full-width">
                                <section id="ware">
									<div class="header">
										<h4 class="title">WAREHOUSE</h4>
										<p class="category">Here is a subtitle for this table</p>
									</div>
									<table class="table table-hover table-striped">
										<thead>
											<th>ID</th>
											<th>Name</th>
											<th>Salary</th>
											<th>Country</th>
											<th>City</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
										</tbody>
									</table>
								</section>
                            </div>
                        </div>
                    </div>				
<!--MANUFACTURING-->					
					<div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">					
								<section id="manf">
									<div class="header">
										<h4 class="title">MANUFACTURING</h4>
										<p class="category">Here is a subtitle for this table</p>
									</div>
									<table class="table table-hover table-striped">
										<thead>
											<th>ID</th>
											<th>Name</th>
											<th>Salary</th>
											<th>Country</th>
											<th>City</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
										</tbody>
									</table>
								</section> 
							</div>
                        </div>
                    </div>
<!--LOGISTICS-->
					<div class="col-md-12">
					    <div class="card card-plain">
                            <div class="content table-responsive table-full-width">
                                <section id="log">
									<div class="header">
										<h4 class="title">LOGISTICS</h4>
										<p class="category">Here is a subtitle for this table</p>
									</div>
									<table class="table table-hover table-striped">
										<thead>
											<th>ID</th>
											<th>Name</th>
											<th>Salary</th>
											<th>Country</th>
											<th>City</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
										</tbody>
									</table>
								</section>
                            </div>
                        </div>
                    </div>					
<!--TRANSPORTATION-->					
					<div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">	
								<section id="trans">
									<div class="header">
										<h4 class="title">TRANSPORTATION</h4>
										<p class="category">Here is a subtitle for this table</p>
									</div>
									<table class="table table-hover table-striped">
										<thead>
											<th>ID</th>
											<th>Name</th>
											<th>Salary</th>
											<th>Country</th>
											<th>City</th>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Dakota Rice</td>
												<td>$36,738</td>
												<td>Niger</td>
												<td>Oud-Turnhout</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Minerva Hooper</td>
												<td>$23,789</td>
												<td>Curaçao</td>
												<td>Sinaai-Waas</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sage Rodriguez</td>
												<td>$56,142</td>
												<td>Netherlands</td>
												<td>Baileux</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Philip Chaney</td>
												<td>$38,735</td>
												<td>Korea, South</td>
												<td>Overland Park</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Doris Greene</td>
												<td>$63,542</td>
												<td>Malawi</td>
												<td>Feldkirchen in Kärnten</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Mason Porter</td>
												<td>$78,615</td>
												<td>Chile</td>
												<td>Gloucester</td>
											</tr>
										</tbody>
									</table>
								</section>                           
                            </div>
                        </div>
                    </div>       
					
                </div>
            </div>
        </div>
		
	<?php include"footer.php"?>
	
	</div>
</div>
</body>