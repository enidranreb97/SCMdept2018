<?php include 'myfunctions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D'Vinum</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body method="post">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" >Supply Chain Management <span> Department </span> </a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

			<div class="profile-usertitle">
				<div class="profile-usertitle-name" style="margin: 10px;"><img src="images/Logo.png" alt="logo"></div>
			</div>
			<div class="clear"></div>

		<ul class="nav menu">
			<li class="active"><a href="home.php"><em class="fa fa-dashboard">&nbsp;&nbsp;</em>Production</a></li>
			<li><a href="inv.php"><em class="fa fa-file-text-o">&nbsp;&nbsp;</em>Inventory</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active">Annual Gross Production</li>
			</ol>
		</div>
		<!--/.row-->
		
		<div class="row">
			<div class="col-lg-12"> 
				<button class="btn btn-lg btn-info" style="float: right; margin-top: 3%"><a href="home.php">Table</button>
			</div>
		</div><!--/.row-->
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						2018
					</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
						<script type="text/javascript" src="gstatic/loader.js"></script>
       					<div id="LineChart" style="width: 900px; height: 500px;"></div>
   					<script type="text/javascript">
					  google.charts.load('current', {'packages':['corechart']});
					      google.charts.setOnLoadCallback(drawChart);

					      function drawChart() {

					        var data = google.visualization.arrayToDataTable([
					          ['Date', 'Sales'],
					          <?php while ($row = mysqli_fetch_array($result)) {
													$date = $row['month']."-".$row['year'];
													$total1 = $row['total1'];
												?>
					          ['<?php echo $date;?>',     <?php echo $total1;?>],

					          <?php } ?>

					        ]);

					        var options = {
					          title: 'Monthly Sales',
					          
					        };

					        var chart = new google.visualization.LineChart(document.getElementById('LineChart'));

					        chart.draw(data, options);
					      }

					</script>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		

	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>