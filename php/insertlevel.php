<?php 
include "connect.php";
$val=$_POST['number'];
echo $val ;
$sql="INSERT INTO `level` (`level`) VALUES ($val)";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "Data insert";
}
 else{
 	echo "not insert";
 } 
 ?>