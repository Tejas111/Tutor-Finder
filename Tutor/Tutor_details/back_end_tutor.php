<?php

$host="localhost";
$username="root";
$password="";
$dbName="tutor";

// Check connection
$conn = mysqli_connect($host, $username, $password, $dbName);
// Check connection

$name=$_POST['name'];

$email=$_POST['email'];

$number=$_POST['mobile'];

$teaching=$_POST['teaching'];

$password=$_POST['password'];
$address = $_POST['addr'];
$subject = $_POST['subject'];

if(($name!=null) && ($email!=null) && ($number!=null) &&($teaching!=null) &&($password!=null) && ($address !=null) && ($subject!=null)) {
$query1="SELECT * FROM ajax WHERE address='$address' ";
$result=mysqli_query($conn,$query1);

 if (mysqli_num_rows($result)==0) {

  $sql2="INSERT INTO ajax (address) VALUES ('$address')  ";
  mysqli_query($conn,$sql2);
}

$sql = "INSERT INTO tutor (name,number,password,email,teaching,address,subject)

VALUES ('$name','$number','$password','$email','$teaching','$address','$subject')";
if (mysqli_query($conn,$sql) === TRUE) {

    echo "Tutor Added successfully";

} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
else {
echo "You Have Missed Something";

}

?>
