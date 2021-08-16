<?php

include('connection.php');

$id=$_REQUEST['id'];

$sql="DELETE  FROM contactus where id='$id'";

$result=mysqli_query($conn,$sql);

if($result){
	header("location:contactctrl.php");
}else{
	echo " Record not deleted".mysqli_error($conn);
}
?>