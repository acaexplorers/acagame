<?php 
include "connect.php";
$val=$_GET['id'];
$sql="DELETE FROM language WHERE language='$val'";
$Delete=mysqli_query($con,$sql);

if ($Delete) {
	echo "<font color='green'>Data Delete";
}
 else{
 	echo "<font color='red'>not Delete";
 } 
 header("refresh: 2; url = ../Language.php");
 ?>