<?php 
include "connect.php";
$val=$_POST['id'];
echo $val ;
$sql="DELETE FROM passes WHERE pass={$val}";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "Data Delete";
}
 else{
 	echo "not Delete";
 } 
 ?>