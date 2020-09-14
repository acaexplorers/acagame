
<?php 
include 'connect.php';
 
 $sql="SELECT type FROM types";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["type"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>