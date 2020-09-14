<?php 
include "php/connect.php";

$filename=$_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];

$folder="images/bird_icons/".$filename;
move_uploaded_file($tempname, $folder);

$val=$folder;
$sql="INSERT INTO `icons` (`icon`) VALUES ('$val')";
$insert=mysqli_query($con,$sql);

if ($insert) {
	echo "<font color='green'>Data insert";
}
 else{
 	echo "'<font color='green'>Data not insert";
 } 

header("refresh: 2; url = admin.php");

 ?>