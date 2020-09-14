
<?php 
include 'connect.php';
 
 $sql="SELECT level,type,category,language,question FROM questions";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {
 		echo "<tr><td>".$row["level"]."</td><td>".$row["type"]."</td><td>".$row["category"]."</td><td>".$row["language"]."</td><td>".$row["question"]."</td><td><a href='php/Deletequestion.php?id=$row[question]'><img src='images/delete.png'></a>"."</td></tr>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>