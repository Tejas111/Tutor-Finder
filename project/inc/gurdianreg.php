<?php


include("constant.php");



$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['mobile'];
$area=$_POST['area'];
$password=$_POST['password'];



$user_type="guardian";

if(($name!=null) && ($email!=null) && ($number!=null) &&($area!=null) &&($password!=null)) { 
$sql = "INSERT INTO guardian (name,number,password,email,area)
VALUES ('$name','$number','$password','$email','$area')";

$query1="INSERT INTO user (email,password,usertype)
VALUES ('$email','$password','$user_type')";

if ($conn->query($sql) === TRUE && $conn->query($query1)) {
    echo "Guardian  Registration successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>








