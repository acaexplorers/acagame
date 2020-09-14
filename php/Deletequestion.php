<?php 
include "connect.php";
$val=$_GET['id'];
$sql="DELETE FROM questions WHERE question='$val'";
$Delete=mysqli_query($con,$sql);

if ($Delete) {
	echo "<font color='green'>Data Delete";
}
 else{
 	echo "<font color='red'>not Delete";
 } 
 header("refresh: 1; url = ../Delete_question.php");
 ?>

