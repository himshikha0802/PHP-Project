<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<style type="text/css">
		.main{
			border: 2px solid;
			display: grid;
			grid-template-rows:150px 150px 150px;
			grid-template-columns:1fr 1fr 1fr;
			grid-auto-rows: 150px;
			grid-gap:10px;
			background: grey;
		}
		.box1{
			background: wheat;
			grid-column: 1/3;
			grid-row: 1/3;
			}
		.box2{background: wheat;}
		.box3{
			background: wheat;
			grid-column: 1/3;
			grid-row: 3/5;
		}
		.box4{
			background: wheat;
			grid-row: 2/4;
			overflow: scroll;
			}
		.box5{background: wheat;}
		.innerbox1{
			border: 2px solid;
			margin:  auto;
			width: 70%;
			height: 50%;
			background-color: skyblue;
		}
		.innerbox2{
			border: 2px solid;
			margin: auto;
			height: 30%;
			width: 40%;
			background: skyblue;
		}
		.text{
			padding: 5px;
			margin: 5px;
		}
		@media only screen and (max-width:700px ){
			.main{
				display: grid;
				grid-template-row:150px;
				grid-template-columns: 1fr;
				grid-auto-rows: 150p;
			}
			.box1{
				grid-column: 1/2;
				grid-row: 1/3;}
			.box3{grid-row: 3/5;
				grid-column: 1/2;
			}
			.box2{grid-row: 5/6;
				grid-column: 1/2;}
			.box4{
				grid-row:6/8 ;
				grid-column: 1/2;
			}
			.box5{
				grid-column: 1/2;
				grid-row: 8/9;
			}
			}

	</style>
</head>
<body>
	<div class="head">
		<h1>My Website</h1>
		<p>some text about who are and what we do. </p>
		<p>Resize the browser window to see that this page is responsive by the way</p>
		<nav>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="login.php">Login</a></li>
		</nav>
	</div>
	<div class="main">
		<?php
			include('connection.php');
			$sql="SELECT * FROM griditemone";
			$result=mysqli_query($conn,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){

		?>
			<div class="box1">
				<div>
					<h3><?php echo $row['headline'];?></h3>
					<p><?php echo $row['date'];?></p>
				</div>
				<div class="innerbox1">
					<?php  echo'<img src="images/'.$row["images"].'" height="100%" width="100%" alt="try again">'?>
				</div>
				<div class="text">
					<p><?php echo $row['detail'];?><p>
				</div>
			</div><?php
		}
	}?>
	<?php
			include('connection.php');
			$sql="SELECT * FROM me";
			$result=mysqli_query($conn,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){

		?>
			<div class="box2">
				<div>
					<h3><?php echo $row['title'];?></h3>
				</div>
					<div class="innerbox2">
					<?php  echo'<img src="images/'.$row["images"].'" height="100%" width="100%" alt="try again">'?>
					</div>
				<div>
					<p><?php echo $row['detail'];?></p>
				</div>
			</div><?php
		}
	}?>

			<?php
			include('connection.php');
			$sql="SELECT * FROM griditemtwo";
			$result=mysqli_query($conn,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){

		?>
			<div class="box3">
				<div>
					<h3><?php echo $row['headline'];?></h3>
					<p><?php echo $row['date'];?></p>
				</div>
				<div class="innerbox1">
					<?php  echo'<img src="images/'.$row["images"].'" height="100%" width="100%" alt="try again">'?>
				</div>
				<div class="text">
					<p><?php echo $row['detail'];?><p>
				</div>
			</div>
			<?php
		}
	}?>
			<?php
			include('connection.php');
			$sql="SELECT * FROM popularpost";
			$result=mysqli_query($conn,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){

		?>
			<div class="box4">
				<div>
					<h3><?php echo $row['headline'];?></h3>
				</div>
					<div class="innerbox2">
					<?php  echo'<img src="images/'.$row["image1"].'" height="100%" width="100%" alt="try again">'?>
					</div>
					<div class="innerbox2">
					<?php  echo'<img src="images/'.$row["image2"].'" height="100%" width="100%" alt="try again">'?>
					</div>
					<div class="innerbox2">
					<?php  echo'<img src="images/'.$row["image3"].'" height="100%" width="100%" alt="try again">'?>
					</div>
				<div>
					<p><?php echo $row['detail'];?></p>
				</div>
			</div><?php
		}
	}?>
			<?php
			include('connection.php');
			$sql="SELECT * FROM follow";
			$result=mysqli_query($conn,$sql);
			if($result){
				while($row=mysqli_fetch_assoc($result)){

		?>
			<div class="box5">
				<div>
					<h3><?php echo $row['title'];?></h3>
					<p><?php echo $row['email'];?></p>
				</div>
			</div>
			<?php
		}
	}?>
	</div>


	<footer class="foot">
	<p style="padding: 5px;">@shikhabhandari.com</p>
</footer>
</body>
</html>