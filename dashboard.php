<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style type="text/css">
		*{
			box-sizing:borderbox;
		}
		body{
			background:lightblue;
		}

		.head{
			text-align: center;
			color: whitesmoke;
			background-color:firebrick;
			border: 2px solid transparent;
		}

		nav {
			border: 2px solid transparent;
			background: black;
			display: flex;
			flex-direction: row;
			font-family: monospace;
		}
		nav li:hover{
			background-color:grey;
		}
		li a{
			text-decoration: none;
			color: whitesmoke;
			font-size: 20px;
			font-weight: bold;
		}
		li{
			padding: 15px ;
			list-style: none;
			margin:Auto 10px auto;
		}	

	</style>
</head>
<body style="background-image: url('images/love.jpg'); height: 100vh; background-position: center; background-size: cover;">
	<nav>
	<li><p class="text-white text-uppercase py-3 bg-info" style="border:2px solid white; border-radius:50%; line-height: 40px;"><?php echo $_SESSION['username'] ?></p></li>
	<li><a class="active" href="dashboard.php">Dashboard</a></li>
	<li><a href="aboutctrl.php">About</a></li>
	<li><a href="contactctrl.php">Contact</a></li>
	<!-- <li><a href="homectrl.php">home</a></li> -->
<li class="ml-auto"><button class="btn btn-danger"><a href="logout.php" >LogOut</a></button></li>
</nav>
	<div class="container shadow text-left col-lg-8 col-5" style="text-shadow:2px 2px whitesmoke;"><h2 class="display-2">Welcome</h2><h1 class="text-info text-uppercase display-3"><?php echo $_SESSION['username'] ?>!</h1></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>