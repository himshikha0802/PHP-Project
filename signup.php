
<?php
session_start();
?>
<?php
include('signuppost.php');
$lastnameerr="";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Signup Page</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
	
	<body style="background: lightskyblue;">
	<section class="container w-50 my-3" style="border: 2px solid transparent; box-shadow: 2px 5px 5px 5px #88888888; background:dodgerblue;">
	<div class="col-lg-4 col-md-5 col-8 m-auto" style="height: 250px;">
		<img src="images/up.jpg" alt=".." width="100%" height="100%">
	</div>
	<div class="w-70 m-auto py-2">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<label>FirstName:</label>
			<input type="text" name="firstname" class="form-control"><span class="error"><?php echo $firstnameerr;?></span><br>

			<label>LastName:</label>
			<input type="text" name="lastname" class="form-control"><span class="error"><?php echo $lastnameerr;?></span><br>

				<label>UserName:</label>
			<input type="text" name="username" class="form-control">


			<label>PhoneNum:</label>
			<input type="text" name="number" class="form-control">

			<label>Email:</label>
			<input type="text" name="email" class="form-control">

			<br>
			<label>Gender:</label><br>
			Male<input type="radio" name="gender" value="male">
			Female<input type="radio" name="gender" value="female">
	<br><br>

			<label>Address:</label>
			<input type="text" name="address" class="form-control">

			<label>Password:</label>
			<input type="Password" name="password" class="form-control">


			<button type="submit" name="submit" class="btn btn-success my-3">Signup</button>
			<div>
			<button type="submit" class="btn btn-dark my-3"><a href="login.php" style="color: white; text-decoration: none;">Back to login</a></button>
			</div>
		</form>
	</div>
	
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
