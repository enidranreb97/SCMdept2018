<?php
	function connection(){
		static $connection;

		if (!isset($connection)) {
			$connection = mysqli_connect('localhost','root','','pms');
		}
		if ($connection === false) {
			return mysqli_connect_error();
		}
		return $connection;
	}

	function test_input($data){
		$data = htmlentities($data);
		$data = stripslashes($data);
		$data = trim($data);
		return $data;
	}
?>