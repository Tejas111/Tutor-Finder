<?php

include("constant.php");

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$teaching=$_POST['teaching'];
$address = $_POST['addr'];
$subject = $_POST['subject'];

$sql = "INSERT INTO add_tutor (name,email,number,teaching,address,subject)

VALUES ('$name','$email','$number','$teaching','$address','$subject')";

if ($conn->query($sql) === TRUE) {
    echo "Tutor Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
