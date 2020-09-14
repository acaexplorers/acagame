
<?php 
include 'connect.php';
 
 $sql="SELECT language FROM language";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["language"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>