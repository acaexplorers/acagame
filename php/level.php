<?php 
include 'connect.php';


 $query="SELECT MAX(level) AS max FROM level";

 $query_result=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($query_result);

 	echo " ".$row['max'];
 	
 

 ?>