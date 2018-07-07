<?php


include("constant.php");



$name=$_POST['name'];
$username=$_POST['username'];
$number=$_POST['mobile'];
$password=$_POST['password'];
$college_name= $_POST['college_name'];


$user_type="student";

if(($name!=null) && ($username!=null) && ($number!=null)&&($password!=null)) { 
$hash = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO student (password,username,name,mobile,institute_name)
VALUES ('$hash','$username','$name','$number','$college_name')";

$query1="INSERT INTO user (email,password,usertype)
VALUES ('$username','$hash','$user_type')";

if ($conn->query($sql) === TRUE && $conn->query($query1)) {
    echo "Student Registered  successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>








