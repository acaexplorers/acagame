<?php 
include "connect.php";
$val=$_POST['language'];
$sql="INSERT INTO `language` (`language`) VALUES ('$val')";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "<font color='green'>Data insert";
}
 else{
 	echo "'<font color='green'>Data not insert";
 } 

header("refresh: 1; url = ../Language.php");
 ?>