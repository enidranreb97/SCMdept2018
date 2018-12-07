
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "pms";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

date_default_timezone_set('Asia/Manila');
$curdate=date("Y-m-d");
$curtime=date("H:i:s A");
$day=date("l");

$datetime = new DateTime('tomorrow');
$tomdate = $datetime->format('Y-m-d');


$director = 'jhd';
$manager = 'dexter.licudan';
$function = 'aaron.rint';

$division = '14';
$dept = '123';

$perm = 1;

if($perm == 1)
{
	$usid = $manager;
	$uname = 'Dexter';
	$context = "department = $dept";
	$action ='Action';
	$global_query = "where $context";
	$global_query_project = "SELECT * FROM register R where $context";
	$global_query_mt = "SELECT * FROM scope S where";
	$width=6;
	$content = "";
	$project_count_query = "select count(pk_ID) from register $global_query ";
	$project_ongoing_count = "select count(pk_ID) from register $global_query and (overall = 'On-Going' or overall = 'New created project')";
	$project_ongoing_query = "SELECT * FROM register $global_query and (overall='On-Going' or overall='New created project')";
	
}
elseif($perm == 3)
{
	$usid = $director;
	$uname = 'Jimmy';
	$context = "division = $division";
	$action = 'Department';
	$global_query = "where $context";
	$global_query_project = "SELECT * FROM register R where $context";
	$global_query_mt = "SELECT * FROM scope S where";
	$width=17;
	$project_count_query = "select count(pk_ID) from register $global_query ";
	$project_ongoing_count = "select count(pk_ID) from register $global_query and (overall = 'On-Going' or overall = 'New created project')";
	$project_ongoing_query = "SELECT * FROM register $global_query and (overall='On-Going' or overall='New created project')";
}
else
{
	$usid = $function;
	$uname = 'Maria F. Deluna';
//	$uname = 'Jhomar F. Izar';
	$context = "department = $dept";
	$action = 'Department';
	$content = "and name = '$uname'";
	$global_query = "where $context";
	$global_query_project = "SELECT Distinct R.pk_ID, R.projectName, R.projectDesc, R.category, R.cost, 
									R.companyName, R.companyNo, R.startdate, R.enddate, R.overall, R.pm 
								FROM register R ,task T where R.pk_ID = T.pk_ID and T.name = '$uname' and $context";
	$global_query_mt = "SELECT Distinct S.pk_ID, S.scope, S.scopeDesc, S.eststart, S.estEnd, S.numTeam, S.scope_id, S.pm FROM scope S, task T where T.scope_no = S.scope_id and";
	$width=17;
	$project_count_query = "select count(R.pk_ID) from register R, task T $global_query and T.name = '$uname' and R.pk_ID = T.pk_ID";
	$project_ongoing_count = "select count(R.pk_ID) from register R, task T $global_query and T.name = '$uname' and R.pk_ID = T.pk_ID and (overall = 'On-Going' or overall = 'New created project')";
	$project_ongoing_query = "SELECT Distinct R.pk_ID, R.projectName, R.projectDesc, R.category, R.cost, 
									R.companyName, R.companyNo, R.startdate, R.enddate, R.overall, R.pm 
								FROM register R ,task T where R.pk_ID = T.pk_ID and T.name = '$uname' and $context and (overall='On-Going' or overall='New created project')";
}	
?>

