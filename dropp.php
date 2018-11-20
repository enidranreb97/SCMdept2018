<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <p>
					<!--<?php echo"$funm";?>-->
					<b class="caret"></b>
				</p>
            </a>
            <ul class="dropdown-menu">
				<li><a href="home.php">Home</a></li>
				<li><a href="sett.php">Settings</a></li>
				<li><a href="MnV.php">About Us</a></li>
				<li class="divider"></li>
				<li><a href="index.php">Log Out</a></li>
            </ul>
        </li>
	</u>
</div>
<?php 
	$user_log = $_SESSION['user'];
	
	include"dbcon/mydbconn.php";
	$sel_query = "select funm from user where funm = '$user_log'";
			$sel_result = mysql_query($sel_query) or die(mysql_error());
				while($row = mysql_fetch_array($sel_result))
			{
					list($funm) = $row;
				
			}
?>