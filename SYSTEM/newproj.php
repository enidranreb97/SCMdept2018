<?php include 'myfunctions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wine Distillery</title>
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
	
	<link rel="stylesheet" href="calender/jquery-ui.css">
    <script src="/calender/jquery-1.10.2.js"></script>
    <script src="calender/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
        $( "#datepicker" ).datepicker();
        });
    </script>
      <script>
        $(function() {
        $( "#datepicker1" ).datepicker();
        });
    </script>
    <script>
    $(document).ready(function () {
      $('.alert-autocloseable-success').hide();
      $('#autoclosable-btn-success').prop("disabled", true);
      $('.alert-autocloseable-success').show();

      $('.alert-autocloseable-success').delay(2000).fadeOut( "slow", function() {
        // Animation complete.
        $('#autoclosable-btn-success').prop("disabled", false);
      });
  
    

      
});

    </script>
</head>
<!--Modal-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Production Info</h4>
		      </div> 
		      <div class="modal-body">
			  
			   <form class="form-horizontal row-fluid" method="POST" action="#" >
<div class="module-head">
<h3>Production Registration</h3>
</div>
<hr style="margin-top:-10px">
<form method="POST" action="function.php" >
<table width="100%" >
<tr><td>Production Name</td><td><input type="text" id="basicinput" placeholder="" class="span" name="projectName" required/></td></tr>
<tr><td>Production Manager</td>
	<td>
	<input type="text" id="basicinput" placeholder="" class="span" name="projectManager" Value="<?php echo$uname?>" readonly/>
	<!--
		<select tabindex="1" data-placeholder="Select here.." class="span" name="projectManager" required>
			<option value="">Select here..</option>
			<?php 
				$query = "select name from staff";
				$result = mysqli_query($query) or die(mysqli_error());
					while($row = mysqli_fetch_array($result))
					{
					list($name) = $row;
					echo"<option>$name</option>";	
					}
			?>
		</select>
	-->
	</td>
</tr>
<tr><td valign="top">Production Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><textarea rows="4" style="width:300px" name="projectDesc" required></textarea></td></tr>
<tr><td>Category</td>
	<td>
		<select tabindex="1" data-placeholder="Select here.." class="span" name="category">
			<?php
				include 'db.php';

				$sql = mysqli_query("SELECT type FROM category");
				while ($row = mysqli_fetch_array($sql)){
						echo "<option value='".$row['type']."' >". $row['type'] . "</option>";
										}
			?>	
		</select>
	</td>
</tr>
<tr><td>Cost</td>
	<td>
		<div class="input-append">
			<input type="text" placeholder="00.00" class="span" name="cost"><span class="add-on">₱</span>
		</div>
	</td>
</tr>
<tr><td>Warehouse Name</td>
	<td>
		<select tabindex="1" data-placeholder="Select here.." class="span" name="companyName">
			<?php
				$select=$_GET['companyName']; 
				$sql = mysqli_query("SELECT * FROM companyname");
				while ($row = mysqli_fetch_array($sql))
				{
					echo "<option value='".$row['name']."' >". $row['name'] . "</option>";
					if(isset($select))
					{ 
						$companyNo= $row['companyNO'];	// Get records from database (table "name_list"). 
					} 
				}	 
			?>
		</select>	
	</td>
</tr>
<tr><td>Production Duration</td>
	<td>
		<div class="row-fluid">
			<div class="span4">
				<label >Start Date</label> 
				<input id="datepicker" type="text" class="input-block-level" autocomplete="off"  name="startdate" required/>
			</div>
			<div class="span4">
				<label >End Date</label>
				<input id="datepicker1" type="text" class="input-block-level" autocomplete="off" name="enddate" required/>
			</div>
		</div>
	</td>
</tr>
<tr>
	<td align="right" colspan="2">
	<hr>
		<input type="Hidden" name="overall" value="New created project">
		<input type="submit" name="btnNew" class="link" value="Create Project" onclick="return confirm('Are you sure you want to continue?')"/>
	</td>
</tr>
</table>
</form> 