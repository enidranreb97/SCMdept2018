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
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand">Supply Chain Management<span>Department</span></a>
			</div>
		</div>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<div class="profile-usertitle">
				<div class="profile-usertitle-name" style="margin: 10px;">
				<img src="images/Logo.png" alt="logo">
				</div>
			</div><div class="clear"></div>
		<ul class="nav menu">
			<li><a href="home.php"><em class="fa fa-dashboard">&nbsp;&nbsp;</em>Production</a></li>
			<li class="active"><a href="inv.php"><em class="fa fa-file-text-o">&nbsp;&nbsp;</em>Inventory</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
		</ul>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><br>
		<div class="row">
			<div class="col-lg-12">
				<!--<button class="btn btn-lg btn-info" style="float: left; margin-top: 3%"><a href="inv.php">Summary</a></button>-->
				<button class="btn btn-lg btn-info" style="float: left; margin-top: 3%"><a href="ps.php">Perishable Supply</a></button>
				<button class="btn btn-lg btn-info" style="float: left; margin-top: 3%"><a href="rm.php">Raw Materials</a></button>
				<button class="btn btn-lg btn-info" style="float: right; margin-top: 3%"><a href="inv.php">Product</a></button>
			</div>
		</div><!--/.row-->
		<br>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Production Info</h4>
		      </div> 
		      <div class="modal-body">
				<form method="post">
				  <div style=" width: 80%; margin-left: 10%;">
						<label><h3>Title :</label>
							<input type="text" name="projectName" style="width: 50%" required></h3>
						<label><h3>Description :</label>
							<input type="text" name="projectDesc" style="width: 50%" required></h3>
						<label><h3>Cost :</label>
							<input type="number" min="18" name="cost"; required></h3>
						<label><h3>Start Date :</label>
							<input type="date" name="startdate" style="width: 50%" required></h3>
						<label><h3>End Date :</label>
							<input type="date" name="enddate" style="width: 50%" required></h3>
						<button name="save" style="width:80%; margin-left: 5%;" class="btn btn-info btn-lg">Save</button>
				   </div>  	   	
				</form>
			<?php  
				 $connection = mysqli_connect("localhost","root","","pms");
			     $db_selected = mysqli_select_db($connection,"pms");
				
				if(isset($_POST['save'])){
						$projectName=$_POST['projectName'];
						$projectDesc=$_POST['projectDesc'];
						$cost=$_POST['cost'];
						$startdate=$_POST['startdate'];
						$enddate=$_POST['enddate'];

					$sql = "INSERT INTO register (projectName,projectDesc,cost,startdate,enddate) VALUES ('$projectName','$projectDesc','$cost','$startdate','$enddate')";
					mysqli_query($connection,$sql);
					header("location: home.php");
				}
			?>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="panel panel-container">
			<table class="table table-striped">
				<tr>
					<th><b>Item#</b></th>
    				<th><b>Name</b></th>
    				<th><b>Factory</b></th>
					<th><b></b></th>
					<th><b>Quantity</b></th>
					<th><b></b></th>
					<th><b></b></th>
					<th><b>In Date</b></th>
					<th><b>Out Date</b></th>
					<th><b></b></th>
					<th><b></b></th>
    				<th><b></b></th>
				</tr>
				<tr>
					<?php
						$link = connection();
						$query = "select * from register";
						$result = mysqli_query($link,$query) or die(mysqli_error($link));
					?>
					<?php
						$n = 1;
						while ($row = mysqli_fetch_array($result)) {
						$id = $row['pk_ID'];
					?>
    				<td><?php echo $row['pk_ID']?></td>
    				<td><?php echo $row['projectName']?></td>
    				<td><?php echo $row['projectDesc']?></td>
					<td><?php echo $row['category']?></td>
    				<td><?php echo $row['cost']?></td>
    				<td><?php echo $row['companyName']?></td>
					<td><?php echo $row['companyNo']?></td>
    				<td><?php echo $row['startdate']?></td>
    				<td><?php echo $row['enddate']?></td>
					<td><?php echo $row['overall']?></td>
					<td><?php echo $row['pm']?></td>
    				<td><a href='editPro.php?id=<?php echo "$id";?>'>Update</a> &nbsp;
    					<!--<a href='deletePro.php?id=<?php echo "$id";?>'>Remove</a>--></td>
				</tr>	
				<?php $n++; }?>	
			</table>
		</div>
	</div>	
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