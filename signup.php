<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		font-family: Arial, Helvetica, sans-serif!important;
	}
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid black;
		width: 95%;
	}
	#button{
		padding: 10px;
		width: 100px;
		background-color: lightsteelblue;
		border-radius: 5px;
	}
	#box{
		background-color: lightgrey;
		margin: auto;
		width: 300px;
		padding: 20px;
		border-radius: 10px;
		border: solid black;
	}
	::placeholder {
   		text-align: center; 
	}
	</style>
	<div id="box">		
		<form method="post">
			<div style="font-size: 20px;padding: 10px;">Signup:</div>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>