<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About us</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	.button{
			border: 2px solid;
			background:black;
			width: 98%;
			padding: 2px;
			margin: 3px;
			text-align: center;
			border-radius: 10px;
		}
		.button:hover{
			background-color: #88888888;
		}
	@media only screen and (max-width:840px ){
	.contain{
			display: grid;
			grid-template-columns:1fr 1fr;
			grid-template-rows: 500px ;
			grid-auto-rows: 500px;
			grid-gap: 10px;
			padding: 15px;

		}
		@media only screen and (max-width:600px ){
		.contain{
			display: grid;
			grid-template-columns:1fr;
			grid-template-rows: 500px ;
			grid-auto-rows: 500px;
			grid-gap: 10px;
			padding: 15px;

		}
	}
</style> 
</head>
<body>
	<div class="head">
		<h1>About Us Page</h1>
		<p>some text about who are and what we do. </p>
		<p>Resize the browser window to see that this page is responsive by the way</p>
		<nav>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="contact.php">Contact</a></li>
	<li><a href="login.php">Login</a></li>
</nav>
</div>
	<h2 class="h2">Team</h2>
		<section class="contain">
		 <?php
include('connection.php');
$count=1;
$sql="SELECT * FROM aboutus";

// execution of query
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){?>
    		<div class="roww">
    			<div class="image">
    		 <?php  echo'<img src="images/'.$row["images"].'" height="100%" width="100%" alt="try again">'?>
           		 </div>
            	<div class="text">
            		<h3><?php echo $row['name'];?></h3> 
                	 <p><?php echo $row['position'];?></p>
                 	<p><?php echo $row['detail'];?></p>
                 	<p><?php echo $row['email'];?></p><button class="button"><a class="aa" href="#">Contact</a></button>
                 </div>
            	</div> 
        <?php

    }
}
    ?>
		</section>
	
<footer class="foot">
<p style="padding: 5px;">@shikhabhandari.com</p>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
