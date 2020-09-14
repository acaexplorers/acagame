
<?php 
include 'connect.php';
 
 $sql="SELECT type FROM types";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<tr><td>".$row["type"]."</td><td><a href='php/Deletetype.php?id=$row[type]'><img src='images/delete.png'></a>"."</td></tr>";
 	}
 }

   else{
   	echo "0 rresult";
   }
   
 ?>