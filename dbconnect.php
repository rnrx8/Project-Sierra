<?php 
$servername = "127.0.0.1";
$username = "ryoka24";
$password = "";
$dbname = "employeedb"; 
 
 $conn = mysqli_connect($servername,$username,$password,$dbname)or 
 die("Database connection failed: " . mysqli_connect_error());
 ?>
 
