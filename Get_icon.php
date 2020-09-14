
<?php 
include 'php/connect.php'; 
 $sql="SELECT icon FROM icons";
 $result=$con->query($sql);

 if ($result->num_rows>0) {
 	while ($row = $result-> fetch_assoc()) {

 		$img=.$row['icon'];
 		echo "<a class='dropdown-item'><img src="$img" class='rounded' alt='...'' style='width: 80px;height: 80px;'></a>";
 	}
 }

   else{
   	echo "0 rresult";
   }

 ?>