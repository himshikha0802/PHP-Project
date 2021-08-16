<?php session_start();?>
<?php
include('connection.php');
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM registration where username='$username' and password='$password'";
	$result=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);

	if($count==1){
			echo"login successful";
			$_SESSION['username']=$username;
			header("location:dashboard.php");
	}	else{
		echo"login failed";
		header("location:login.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" defer>
  
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
<body>
<div class="head">
		<h1>Login page</h1>
		<p>some text about who are and what we do. </p>
		<p>Resize the browser window to see that this page is responsive by the way</p>
<nav>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.php">Contact</a></li>
	<li><a href="login.php">Login</a></li>
</nav>
</div>
<section class="container w-50 my-3" style="border: 2px solid transparent; box-shadow: 2px 4px 4px 4px #88888888; background: dodgerblue;">
	<div class="col-lg-4 col-md-5 col-8 m-auto" style="height: 250px;">
		<img src="images/admin.jpg" alt=".." width="100%" height="100%">
	</div>
	<div class="w-40 m-auto py-2">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<label>Username:</label>
			<input type="text" name="username" class="form-control">

			<label>Password:</label>
			<input type="Password" name="password" class="form-control">

			<button type="submit" name="submit" class="btn btn-success my-3">Login</button>
			<div>
			<span>Not Account?</span>
			<button type="submit" class="btn btn-dark my-3"><a href="signup.php" style="color: white; text-decoration: none;">Signup</a></button>
			</div>
		</form>
	</div>
	
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
</body>
</html>