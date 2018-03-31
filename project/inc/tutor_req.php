<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$area=$_POST['area'];
$number=$_POST['mobile'];
$subject=$_POST['subject'];
$teaching=$_POST['teaching'];



if(($name!=null)  && ($number!=null)&& ($teaching!=null)&& ($subject!=null)) { 
$sql = "INSERT INTO tutor_request (gurdian_name,gurdian_mobile,email,subject,teaching,area)
VALUES ('$name','$number','$email','$subject','$teaching','$area')";



if ($conn->query($sql) === TRUE) {
    echo "Tutor Requested successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>








