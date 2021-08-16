<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<style type="text/css">
		.row{
			display: flex;
			flex-direction: row ;
			margin: auto;
		}
		.column{
			width: 100%;
			border: 2px solid transparent;
		}
		form{
			margin-left:5px ;
			margin-top: 40px;		}
		.input{
			width: 90%;
			height: 24px;
		}
		.drop{
			width: 91%;
			height:30px;
		}
		.submit{
			font-size: 20px;
			width: 30%;
			margin: 5px;
			background:green;
			color: white;
			font-weight: bold;
			border-radius: 10px;
		}
		.submit:hover{
			background:grey;
		}
		.textarea{
			width: 90%;
			height:70px;
		}

	</style>
</head>
<body>
	<div class="head">
		<h1>Contact Page</h1>
		<p>some text about who are and what we do. </p>
		<p>Resize the browser window to see that this page is responsive by the way</p>
		<nav>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.php">Contact</a></li>
	<li><a href="login.php">Login</a></li>

</nav>
</div>

<div class="acontainer">
	<div style="text-align: center;">
		<h2>Contact Us</h2>
		<p>Swing by for a cup of coffee or leave us a message</p>
	</div>
	<div class="row">
		<div class="column">
			<img src="images/pp.png" alt=".." width="100%" height="100%" >
		</div>
		<div class="column">
			<form method="post" action="">
				<label>First Name:</label><br>
				<input class="input" type="text" name="firstname">
				<br><br>
				<label>Last Name:</label><br>
				<input class="input" type="text" name="lastname">
				<br><br>
				<label> Country:</label><br>
				<select name="country" class="drop">
				<option value="australia">Australia</option>
				<option value="nepal">Nepal</option>
				<option value="india">India</option>					
				</select> 
				<br><br>
				<label>Details:</label><br>
				<textarea class="textarea" name="detail"></textarea>
				<br><br>
				<input class="submit" type="submit" name="submit" value="submit">
			</form>
		</div>
	</div>

	
</div>
<?php
	include('footer.php');
?>
</body>
</html>
<?php
include('connection.php');

if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$country=$_POST['country'];
	$detail=$_POST['detail'];

	$sql="INSERT INTO contactus(firstname,lastname,country,detail) values('$firstname','$lastname','$country','$detail')";

	$result=mysqli_query($conn,$sql);

	if($result){
	header("location:index.php");
	}else{
		echo"Record not inserted".mysqli_error($conn);
			}
}
?>