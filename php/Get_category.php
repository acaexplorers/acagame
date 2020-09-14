
<?php 
include 'connect.php';
 
 $sql="SELECT category FROM category";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<option>".$row["category"]."</option>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>