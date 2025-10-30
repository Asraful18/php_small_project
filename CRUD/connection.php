<?php
 $host="localhost";
 $user="root";
 $pass="";
 $db="azam";
 $con=mysqli_connect($host,$user,$pass,$db);
 if($con){
  echo "Connection successful";
 }
 else{
  die("Connection Failed!".mysqli_error($con));
 }
?>