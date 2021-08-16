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
                 	<p><?php echo $row['email'];?></p><button class="btn"><a class="aa" href="#">Contact</a></button>
                 </div>
            	</div>  
        <?php

    }
}
    ?>