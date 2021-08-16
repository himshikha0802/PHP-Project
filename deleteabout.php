<?php

include('connection.php');

$id=$_REQUEST['id'];

$sql="DELETE  FROM aboutus where id='$id'";

$result=mysqli_query($conn,$sql);

if($result){
	header("location:aboutctrl.php");
}else{
	echo " Record not deleted".mysqli_error($conn);
}
?>