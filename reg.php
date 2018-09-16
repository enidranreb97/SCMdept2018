<html>
<head>
	<?php session_start(); include"dbcon/mydbconn.php";?>
	<title>SCMdept2018</title> <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body  id="top" onLoad="changeHashOnLoad(); " > <br><br><br>
<div class="wrapper">
<h1 style="text-align: center;color: #006666"><u><b>D'Vinum</b></u></h1>
<p style="text-align: center;color: #009999">Supply Chain Management Department</p>
	<div class="panel-body">
		<div id="loginAlert"></div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" align="center">
				<table align="center" >
					<tr><td>Username</td></tr><tr><td><br></td></tr>
					<tr><td><input type="text" name="user" required/><td></tr>
				</table><br>
				<table align="center" >
					<tr><td>Password</td></tr><tr><td><br></td></tr>
					<tr><td><input type="password" name="pass" required/></td></tr>
				</table><br>
				<table align="center" >
					<tr><td>Name</td></tr><tr><td><br></td></tr>
					<tr><td><input type="text" name="funm" required/></td></tr>
				</table><br>
				<input type="submit" name="btnregister" value="Register"/>
			</form>
	</div>
	<?php
	if(isset($_POST['btnregister']))
	{
	$user= $_POST['user'];
	$pass= $_POST['pass'];
	$funm= $_POST['funm'];
	/*$type= $_POST['type'];*/

	$sel_query = "select username, password from user where username = '$user' and password = '$pass'";
			$sel_result = mysql_query($sel_query) or die(mysql_error());
			$exist = mysql_num_rows($sel_result);
			
			if($exist > 0)
				{
					echo"<script language='javascript'> window.alert('Account Already Exist!');";
					echo"</script>";
				}
				
				else
				{
					/*$query = "insert into user (username,password,funm,usertype) 
										values ('$user', '$pass', '$funm', '$type')";*/
					$query = "insert into user (username,password,funm) 
										values ('$user', '$pass', '$funm')";
					$_SESSION['user'] = $row['username'];
					header('location:index.php');
					$result = mysql_query($query) or die(mysql_error());
							echo"<script language='javascript'>window.confirm('Successfully register')";
							echo"</script>";	
				}			
	} 
	?>
</div>
<?php include"footerr.php"?>
</body>
</html>
