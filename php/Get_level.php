
<?php 
include 'connect.php';
 
 $sql="SELECT level FROM level";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["level"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>