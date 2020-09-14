<?php 
include 'connect.php';
 
 $sql="SELECT pass FROM passes";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["pass"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>