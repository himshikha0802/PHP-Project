<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<?php
include('connection.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$position=$_POST['position'];
	$detail=$_POST['detail'];
	$email=$_POST['email'];
	$file=$_FILES['file']['name'];
	$temp_name=$_FILES['file']['tmp_name'];
	$path='images/'.$file;
	move_uploaded_file($temp_name,$path);

	$sql="INSERT INTO aboutus(images,name,position,email,detail) values('$file','$name','$position','$email','$detail')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header("location:aboutctrl.php");
	}else{
		echo"Record not inserted".mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Page</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	
</head>
<body>
<body style="background-image: url('images/love.jpg'); height: 100vh; background-position: center; background-size: cover;">
	
	<p class="text-white text-center text-uppercase py-3 bg-info" style="border:2px solid white; border-radius:50%; line-height: 40px; width:80px; margin:5px;"><?php echo $_SESSION['username'] ?></p>
	
	<div class="text-center text-success"><h1 style="text-shadow:2px 2px wheat; "> Insert aboutus record</h1></div>

	<div class="w-50 m-auto py-2 container bg-info">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			<label>Name:</label>
			<input type="text" name="name" class="form-control">

			<label>Position:</label>
			<input type="text" name="position" class="form-control">

			<label>Email:</label>
			<input type="text" name="email" class="form-control">

			<label>Detail:</label>
			<textarea class="form-control" name="detail"></textarea>

			<label>Images:</label>
			<input  type="file" class="form-control" name="file">

			<br>
			<button type="submit" name="submit" class="btn btn-success my-3">Insert</button>
			<div class="btn btn-danger">
			<a href="aboutctrl.php" style="color: white; text-decoration: none;">Cancel</a>
			</div>
		</form>
	</div>
	
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
