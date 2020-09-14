<?php 

   $host="localhost";
   $user="root";
   $password="";
   $dbname="game";

   $con= new mysqli($host,$user,$password,$dbname);

   if ($con->connect_error) {

   	die("no conection".$con->connect_error);
   }

   




 ?>