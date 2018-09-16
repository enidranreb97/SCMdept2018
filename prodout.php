<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <table width="900px"  border="1px" align="center">
		<tr>
			<td align="center"><b>TITLE</td>
			<td align="center"><b>SUBJECT</td>
			<td align="center"><b>DESCRIPTION </td>
		</tr>
<?php	
include"../dbcon/mydbconn.php";
	$link = connect();
	$key=$_GET['key'];
	echo"<input type='hidden' name='key' value='$key'/>";
		$query2 = "select * from announcement where id='$key'";
		$result2 = mysql_query($query2) or die(mysql_error());
	while($row2 = mysql_fetch_array($result2))
	{
		list($id,$a,$b,$c) = $row2;
			echo"<tr>
				<td><input type='text' name='qb' value='$a' style='width:300px' required/></td>
				<td><input type='text' name='qc' value='$b' style='width:300px' required/></td>
				<td><textarea name='qd'  style='width:400px;height:100px;' placeholder='type here...' required/>$c</textarea></td>
				</tr>";
	}		
if(isset($_POST['btn_add']))
	{
	$key= $_POST['key'];
	$qb= $_POST['qb'];
	$qc= $_POST['qc'];
	$qd= $_POST['qd'];
	$query3 = "update announcement set 
		title='$qb'
		, edate='$qc'
		, de='$qd' where id='$key'";
	$result3 = mysql_query($query3) or die(mysql_error());
		echo"<script language='javascript'>window.opener.location.reload()";
		echo"</script>";
		echo"<script language='javascript'>window.confirm(' Announcement successfully edited!')";
		echo"</script>";					
		/*
		echo"<script language='javascript'>window.close('header.php')";
		echo"</script>";
		*/
	}
?>
</table>
	<div class="panel-footer">
		<input type="submit"  value="Post" name="btn_add" class="btn btn-primary" style="margin-top:25px;"/>
	</div>	
</form>