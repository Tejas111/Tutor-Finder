<?php


include("constant.php");

$number=$_POST['mobile'];
$teaching=$_POST['teaching'];
$address = $_POST['address'];
$subject = $_POST['subject'];

session_start(); 
 $email= $_SESSION['email'];
 $password= $_SESSION['password'];

 $sql = "SELECT * FROM tutor where email='$email' AND password='$password' ";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
     
     
         $id= $row["id"];
         //echo  $user_type;
 
     }
     }
     echo $id;
if(($number!=null) && ($teaching!=null) && ($address!=null)&&($subject!=null)) { 
$sql2= "UPDATE tutor SET number='$number' ,  teaching='$teaching' , address='$address' , subject = '$subject' WHERE id='$id' ";
if ($conn->query($sql2) === TRUE && $conn->query($sql)) {
    echo "Tutor Record updated  successfully";
} else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
}

else {

echo "You Have Missed Something";
}
?>