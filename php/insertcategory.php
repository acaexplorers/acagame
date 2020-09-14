<?php 
include "connect.php";
$val=$_POST['category'];
$sql="INSERT INTO `category` (`category`) VALUES ('$val')";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "<font color='green'>Data insert";
}
 else{
 	echo "'<font color='green'>Data not insert";
 } 

header("refresh: 1; url = ../category.php");
 ?>