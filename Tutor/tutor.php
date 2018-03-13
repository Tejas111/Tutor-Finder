<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tutor";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['search'])){
  $search =  mysqli_real_escape_string($conn,$_POST['search']);
  $sql = "SELECT * FROM tutor WHERE location LIKE '%$search%' ";
  $result = mysqli_query($conn,$sql);
  /*$result = mysqli_num_rows($result);*/
  if(mysqli_num_rows($result)>0)
  {
      while($row = mysqli_fetch_array($result))
      {
        $output .='<li>'.$row["location"].'</li>';
      }
  }
  else {
    $output .='<li>location not found</li>';
  }
  $output .= '</ul>';
  echo $output;
}
echo "hello";
  /*if ($totalno>0)
    {
      while($row=mysqli_fetch_assoc($result)){
        echo "<div>
                <h3>".$row['name']."</h3>
                <h3>".$row['age']."</h3>
                <h3>".$row['location']."</h3>
                <h3>".$row['subject']."</h3>
              </div>";
            }
      }
    else{
      echo "There are no results to be found! ";
    }
  }*/
?>
