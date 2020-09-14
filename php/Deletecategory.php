<?php 
include "connect.php";
$val=$_GET['id'];
$sql="DELETE FROM category WHERE category='$val'";
$Delete=mysqli_query($con,$sql);

if ($Delete) {
	echo "<font color='green'>Data Delete";
}
 else{
 	echo "<font color='red'>not Delete";
 } 
 header("refresh: 2; url = ../category.php");
 ?>