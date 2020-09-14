<?php 
include 'connect.php';


 $query="SELECT MAX(winner) AS max FROM winners";

 $query_result=mysqli_query($con,$query);
 $winner=mysqli_fetch_assoc($query_result);

 	echo " ".$winner['max'];
 	
 

 ?>