<html lang="en">
<head>
	<title>SCM</title>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/winery.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text" > SCM </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="sfor.php">
                        <p>Sales Forecast</p>
                    </a>
                </li>
				<li>
                    <a href="prod.php">
                        <p>Production</p>
                    </a>
				<li>
                    <a href="matt.php">
                        <p>Materials</p>
                    </a>
                </li>
				<li>
                    <a href="supp.php">
                        <p>Supply</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">D'Vinum</a>
                </div>
				<div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Hello!
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="sett.php">Settings</a></li>
                                <li><a href="MnV.php">Department</a></li>
                                <!-- <li class="divider"></li> -->
                              </ul>
                        </li>
                    </ul>
                </div>
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

		<footer class="footer">
			<div class="container-fluid">
            <nav class="pull-left">
            </nav>
				<p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> 
                </p>
			</div>
		</footer>
	</div>
</div>


</body>

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	<script src="assets/js/demo.js"></script>
</html>
