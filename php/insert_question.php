<?php 
include "connect.php";
$level=$_POST['level'];
$type=$_POST['type'];
$category=$_POST['category'];
$language=$_POST['language'];
$question=$_POST['question'];

$sql="INSERT INTO `questions` (`level`, `type`, `category`, `language`, `question`) VALUES ('$level', '$type', '$category', '$language', '$question');";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "<font color='green'>Data insert";
}
 else{
 	echo "'<font color='green'>Data not insert";
 } 

header("refresh: 2; url = ../add_question.php");
 ?>