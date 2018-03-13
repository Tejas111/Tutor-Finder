/* for ajax*/
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
if(isset($_POST["query"]))
 {
      $output = '';
      $query = "SELECT * FROM tutor WHERE location LIKE '%".$_POST["query"]."%'";
      $result = mysqli_query($conn, $query);
      $output = '<ul class="list-unstyled">';
      if(mysqli_num_rows($result) > 0)
      {
           while($row = mysqli_fetch_assoc($result))
           {
                $output .= '<li>'.$row["location"].'</li>';
           }
      }
      else
      {
           $output .= '<li>location Not Found</li>';
      }
      $output .= '</ul>';
      echo $output;
 }

  ?>
