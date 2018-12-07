</!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css">
  .formstyle{
  width: 30%;
  margin: 0px auto; 
  padding: 20px; 
  border: 1px solid gray;
  background: white;
  border-radius: 10px 10px 10px 10px; 
  font-family: Arial;
  }
  .input-group{
    margin: 10px 0px 10px 0px;
    width: 300px;
  }
  .input-group label{
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input{
    height: 30px;
    width: 100%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn{
    padding: 10px;
    font-size: 15px;
    color: white;
    border: none;
    border-radius: 5px;
    width: 100%;
  }
  .error{
    width: 92%;
    margin:0px auto;
    padding: 10px;
    color: red;
    border: 1px solid gray;
    background: #f2dede;
    text-align: left;
  }
</style>
  <?php 
   $errors = array();
   ?>
  <?php
  session_start();
  $user ="";
  $pass ="";
  $database = "db_scmdept";
  $db = mysqli_connect("localhost","root","",$database);
  if(isset($_POST['submit']))
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT *  FROM user WHERE Username='$user' AND Password ='$pass' LIMIT 1";
    $res = mysqli_query($db,$sql);
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $username = $row['username'];
          $password = $row['password'];
        }
    }
    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    $time = date("h:i:sa");
    if (mysqli_num_rows($res) == 1)
    {
      $sql1 = "INSERT INTO user (userID,funm,username,password) VALUES ('$userID','$funm','$username','$password')";
      $res = mysqli_query($db,$sql1);
	if ($username == username &
		$password == password ) {

          header("location: home.php");
        }else{

          header("location: home.php");
        }   
    } else {
        array_push($errors,"Invalid Username/Password!");
    }
  }
?>
</head>
<?php include"header2.php"?>
<body>
<form class="formstyle" method="post" style="margin-top: 10%">
  <h1 style="text-align: center;">Sign In</h1>
  <?php if (count($errors)>0):?>
    <div class="error">
      <?php foreach($errors as $error):?>
        <p><?php echo $error;?></p>
      <?php endforeach?>
    </div>
  <?php endif ?>
  <div class="input-group">
    <label>Username : </label>
    <input type="text" name="username" placeholder="Username">
  </div>
  <div class="input-group">
    <label>Password : </label>
    <input type="password" name="password" placeholder="Password">
  </div>&nbsp;
  <div>
    <input type="submit" value="Login" name="submit" class="btn btn-info">
  </div>
</form>
</body>
</html>