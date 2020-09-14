<?php 
include 'connect.php';


 $query="SELECT MAX(pass) AS max FROM passes";

 $query_result=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($query_result);

 	echo " ".$row['max'];
 	 
 

 ?>