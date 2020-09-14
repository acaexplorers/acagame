<?php 
include "connect.php";
$val=$_POST['type'];
$sql="INSERT INTO `types` (`type`) VALUES ('$val')";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "<font color='green'>Data insert";
}
 else{
 	echo "'<font color='green'>Data not insert";
 } 

header("refresh: 1; url = ../type.php");
 ?>