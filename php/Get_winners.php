<?php 
include 'connect.php';
 
 $sql="SELECT winner FROM winners";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["winner"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>