<?php


$host="localhost";
$username="root";
$password="";
$dbName="student";

// Check connection
$conn = mysqli_connect($host, $username, $password);



// Check connection

$conn = new mysqli($host, $username, $password, $dbName);



// Check connection

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}


$name=$_POST['name'];

$username=$_POST['username'];

$number=$_POST['mobile'];

$password=$_POST['password'];

$college_name= $_POST['collage_name'];

if(($name!=null) && ($username!=null) && ($number!=null) &&($password!=null)&&($college_name!=null)) {

$sql = "INSERT INTO info (password,username,name,mobile,age)

VALUES ('$password','$username','$name','$number','$college_name')";



$query1="INSERT INTO user (username,password)

VALUES ('$username','$password')";



if ($conn->query($sql) === TRUE && $conn->query($query1)) {

    echo "Student Registered successfully";

} else {



    echo "Error: " . $sql . "<br>" . $conn->error;

}


}



else {



echo "You Have Missed Something";

}

?>
