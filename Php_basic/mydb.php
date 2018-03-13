<?php
$servername = "localhost";
$username = "root";
$password = "";
$connec = new mysqli($servername,$username,$password);
if($connec->connect_error){
	die("connection failed: " .$connec->connect_error);
}

$sql = "CREATE DATABASE tejas";
if($connec->query($sql) == TRUE)
	echo "data created succesfully";
else{
	echo "error creating database" . $connec->error;
}

$connec->close();
?>