<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tejas";
$email = $_POST["useremail"];
$connec = NEW mysqli($servername,$username,$password,$dbname);
if($connec->connect_error){
	die("connection failed: " .$connec->connect_error);
}
$sql = "CREATE TABLE Hello (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30) NOT NULL

)";
if ($connec->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $connec->error;
}

$sql = "INSERT INTO Hello(email) 
VALUES ('$email');";

if ($connec->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connec->error;
}

$connec->close();

?>