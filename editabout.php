<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<?php
include('connection.php');

$id=$_REQUEST['id'];

$sql="SELECT * FROM aboutus where id=$id";

$result=mysqli_query($conn,$sql);

if($result){
	$row=mysqli_fetch_assoc($result);
}
?>
<?php
if(isset($_POST['update'])){
	$id=$_REQUEST['id'];
	$name=$_POST['name'];
	$position=$_POST['position'];
	$detail=$_POST['detail'];
	$email=$_POST['email'];
	$file=$_FILES["file"]["name"];
	$temp_name=$_FILES["file"]["tmp_name"];
	$path="images/".$file;
	move_uploaded_file($temp_name, $path);

	$sql="UPDATE aboutus set name='$name',position='$position',detail='$detail',email='$email',images='$file' where id='$id'";

	$result=mysqli_query($conn,$sql);

	if($result){
	header("Location:aboutctrl.php");
	}else{
		echo"Record not found".mysqli_error($conn);
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
</head>
<body style="background-image: url('images/love.jpg'); height: 100vh; background-position: center; background-size: cover;">
	<p class="text-white text-center text-uppercase py-3 bg-info" style="border:2px solid white; border-radius:50%; width:80px; margin: 15px; line-height: 40px;"><?php echo $_SESSION['username'] ?></p>

	<div class="text-center text-success"><h1 style="text-shadow:2px 2px wheat; ">Update record</h1></div>
	<div class="container bg-info py-4">
	<form method="post" action="" enctype="multipart/form-data" class="container w-50 m-auto">
		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>"><br>

		<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $row['name'];?>"><br>

		<input type="text" class="form-control" name="position" placeholder="Position" value="<?php echo $row['position'];?>"><br>

		<input type="text" class="form-control" name="detail" placeholder="Detail" value="<?php echo $row['detail'];?>"></textarea><br>

		<input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'];?>"><br>

		<input type="file" class="form-control" name="file" value="<?php echo $row['images'];?>"><br>

		<input type="submit" class="btn btn-success" name="update" value="update">

		<div class="btn btn-danger">
	<a class="text-white " style="text-decoration: none;" href="aboutctrl.php">Cancel</a>
</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
