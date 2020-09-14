
<?php 
include 'connect.php';
 
 $sql="SELECT category FROM category";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<tr><td>".$row["category"]."</td><td><a href='php/Deletecategory.php?id=$row[category]'><img src='images/delete.png'></a>"."</td></tr>";
 	}
 }

   else{
   	echo "0 rresult";
   }
   
 ?>