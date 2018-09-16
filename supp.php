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
                    <a class="navbar-brand">Supply</a>
                </div>
				<?php include"dropp.php"?>
            </div>
        </nav>
			<div class="content">
				<div class="container-fluid">			
					<div class="row">
						<div class="col-md-16">
							<div class="card ">
								<div class="header">
									<h4 class="title">2018 Sales</h4>
									<p class="category">All products including Taxes</p>
								</div>
								<div class="content">
									<div id="chartActivity" class="ct-chart">yhey!
									</div>
								</div>
								<div class="footer">
									<div class="legend">
										<i class="fa fa-circle text-info"></i> Tesla Model S
										<i class="fa fa-circle text-danger"></i> BMW 5 Series
									</div>
									<hr>
									<div class="stats">
										<i class="fa fa-check"></i> Data information certified
									</div>
								</div>
							</div>

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart">
								</div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
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