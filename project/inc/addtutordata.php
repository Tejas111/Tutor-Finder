<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$qualification=$_POST['qualification'];
$subject=$_POST['subject'];
$area=$_POST['area'];



$sql = "INSERT INTO add_tutor (name, qualification, teaching_sub,are,img,mobile,email)
VALUES ('$name','$qualification','$subject','$area','img2.jpg','$number','$email')";

if ($conn->query($sql) === TRUE) {
    echo "Tutor Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>








