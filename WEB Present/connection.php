<?php
$con= mysqli_connect("localhost","Drive","drive123456","tmo") or die("Error: " . mysqli_error($con)); //เชื่อฐานข้อมูล
mysqli_query($con, "SET NAMES 'utf8' "); 
?>