
<?php include 'myfunctions.php'; ?>
<?php 
  $prod_id = $_GET['id'];
  $db = mysqli_connect("localhost","root","","pms");

  $query_fetch = "SELECT * from register where pk_ID='$prod_id'";
  $result = mysqli_query($db,$query_fetch);

  while ($row = mysqli_fetch_array($result)) {
    $prodname = $row['projectName'];
    $prodprice = $row['cost'];
  }
?>
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
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
			<li><a href="#"><em class="fa fa-file-text-o">&nbsp;&nbsp;</em>Inventory</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li class="active">Stocks</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product Info</h1>
			</div>
		</div><!--/.row-->

		

		<div class="panel panel-container">
			<form method="post">
			  <div style=" width: 80%; margin-left: 10%;">
	      			<label><h3>Product Name :&nbsp;&nbsp;</label>
	        			<input type="text" name="pname" style="width: 50%" value="<?php echo $prodname ?>" disabled ></h3>
	    			<label><h3>Product Price :&nbsp;&nbsp;&nbsp;&nbsp;</label>
	        			<input type="number" min="18" name="price" value="<?php echo $prodprice ?>"></h3><br>
	   			  	<button name="save" style="width:50%; margin-left: 5%;" class="btn btn-info btn-lg">Save</button><br><br>
	   			  	<button style="width:50%; margin-left: 5%;" type="button" class="btn btn-info btn-lg" data-dismiss="modal"><a href="inv.php">Close</a></button>
	      	  </div>

	      	  <?php  
				 $connection = mysqli_connect("localhost","root","","pms");
			     $db_selected = mysqli_select_db($connection,"pms");
				
				if(isset($_POST['save'])){
						$productname=$_POST['pname'];
						$pprice=$_POST['price'];

					$sql = "UPDATE register SET Amount = '$pprice' where id = '$prod_id'";
					mysqli_query($connection,$sql);
					header("location:home.php");
				}
			?>
	      	   	
		</form>
		</div>
		

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