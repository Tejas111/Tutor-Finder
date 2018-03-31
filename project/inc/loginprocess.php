<?php 

include("constant.php");




$email=$_POST['email'];

$password=$_POST['password'];

$user_type="default";

$sql = "SELECT * FROM user where email='$email' AND password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	
		$user_type= $row["usertype"];
		//echo  $user_type;

    }

	
	}
else {
echo "Email & Password Dont Match";
}	

	if($user_type=="teacher") {
		 session_start(); 
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
   $_SESSION['user_type'] = $user_type;
       header("Location: http://localhost/project/teacheradmin.php");
	   
  }
  else if ($user_type=="admin") {
  session_start(); 
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  $_SESSION['user_type'] = $user_type;
  header("Location: http://localhost/project/admin.php");
  }
  else if ($user_type=="student") {
  session_start(); 
  $_SESSION['email'] = $email;
  $_SESSION['password'] = $password;
  $_SESSION['user_type'] = $user_type;
  header("Location: http://localhost/project/studentadmin.php");
  }
$conn->close();
?>








