<?php
	include "myfunctions.php";
	$link = connection();
	$id = $_GET['id'];

	$query = "delete from register where pk_ID = $id";
	$result = mysqli_query($link,$query) or die(mysqli_error($link));
	header("location:home.php");
?>