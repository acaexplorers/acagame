<?php 
$filename=$_FILES["file"]["name"];
$tempname=$_FILES["file"]["tmp_name"];

$folder="../imges/bird_icons/".$filename;
move_uploaded_file($tempname, $folder);

echo "file upload";



 ?>