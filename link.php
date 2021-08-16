
			if(empty($_POST['firstname'])){
				$firstnameerr="Name is required";
			}else{
			$firstname=$_POST['firstname'];
			if(!preg_match("/^[a-zA-Z-' ]*$/", $firstname)){
				$firstnameerr="Only letter and spaces allowed";
			}
		}
		if(empty($_POST['lastname'])){
				$lastnameerr="Name is required";
			}else{
			$lastname=$_POST['lastname'];
			if(!preg_match("/^[a-zA-Z-' ]*$/", $lastname)){
				$lastnameerr="Only letter and spaces allowed";
			}
		}
		if(empty($_POST['username'])){
				$usernameerr="Name is required";
			}else{
				$username=$_POST['username'];
		}
		if(empty($_POST['email'])){
			$emailerr="Email is required";
		}else{
			$email=$_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$emailerr="Not validate email";
			}
		}
			if(empty($_POST['number'])){
			$numbererr="Address is required";
		}else{
			$number=$_POST['number'];}

			if(empty($_POST['gender'])){
			$genderr="Select one";
		}else{
			$gender=$_POST['gender'];
		}
		if(empty($_POST['address'])){
			$addresserr="Address is required";
		}else{
			$address=$_POST['address'];
		}
			
			if(empty($_POST['address'])){
			$passworderr="Address is required";
		}else{
			$password=$_POST['password'];
		}
			
			
		 if($usernamecount>0){
				?>
						<script>
							alert("Username already exists!");
						</script>
						<?php
					}else if(empty($_POST['firstname'])){
						$firstnameerr="Name is required";
					}else if(empty($_POST['lastname'])){
						$lastnameerr="lastName is required";
					}else {
						$firstname=$_POST['firstname'];
						$lastname=$_POST['lastname'];
						$insertquery="INSERT INTO registration(firstname,lastname,username,email,number,gender,address,password) values('$firstname','$lastname','$username','$email','$number','$gender','$address','$password')";

						$result=mysqli_query($conn,$insertquery);
						if($result){?>
								<script>alert("Account created successfully!");</script>
							<?php
							header('location:login.php');
						}else{
							?>
						<script>
							alert("Not created Account!");
						</script>
						<?php
					}
				}
			}

?>