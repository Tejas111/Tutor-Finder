<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tejas";
$connec = new mysqli($servername,$username,$password,$dbname);
if($connec->connect_error){
	die("connection failed: " .$connec->connect_error);
}
$sql = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL
)";
if($connec->query($sql) === TRUE){
	echo "table created succesfully";
}else{
	echo "error creatung table:" .$connec->error;
}
$connec->close();
?>