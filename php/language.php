
<?php 
include 'connect.php';
 
 $sql="SELECT language FROM language";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<tr><td>".$row["language"]."</td><td><a href='php/Deletelanguage.php?id=$row[language]'><img src='images/delete.png'></a>"."</td></tr>";
 	}
 }

   else{
   	echo "0 rresult";
   }
   
 ?>