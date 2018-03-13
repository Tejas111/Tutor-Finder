<?php

// define variables and set to empty values
session_start();
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = $success = "";
$count = 0;
$_SERVER['val2']=$_POST['email'];$_SERVER['val3']=$_POST['phone'];
//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['name'])){
$_SESSION['error1']='';$_SESSION['error2']='';$_SESSION['error3']='';
$_SERVER['val1']=$_POST['name'];



  if (empty($_POST["name"])) {
    $name_error = "Name is required";
    $_SESSION['error1']=$name_error;$count=1;


  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
      $_SESSION['error1']=$name_error;$count=1;

    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
    $_SESSION['error2']=$email_error;
    $count=1;

  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
      $_SESSION['error2']=$email_error;
      $count=1;
    }
  }

  if (empty($_POST["phone"])) {
    $phone_error = "Phone is required";
    $_SESSION['error3']=$phone_error;
    $count=1;
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
      $phone_error = "Invalid phone number";
      $_SESSION['error3']=$phone_error;
    $count=1;
    }
  }

if($count==1)
{
  header("Location:login.php");
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$phone = $_POST["phone"];
$name = $_POST["name"];
$email = $_POST["email"];
$connec = NEW mysqli($servername,$username,$password,$dbname);
if($connec->connect_error){
	die("connection failed: " .$connec->connect_error);
}

$sql = "INSERT INTO info(name,email,phone)
VALUES ('$name','$email','$phone');";

if ($connec->multi_query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $connec->error;
}

$connec->close();
}
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
