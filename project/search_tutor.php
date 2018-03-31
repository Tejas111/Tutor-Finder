<?php include("header.php"); ?>


<section id="tutorlist">
<div class="container">

	<div class="row">

	<h2>Featured Tutors</h2>

	<?php

	$host="localhost";
	$username="root";
	$password="";
	$dbName="tutor";

	// Check connection
	$conn = new mysqli($host, $username, $password, $dbName);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sub=$_POST['subject'];

		$loc=$_POST['country'];

	if($sub==null) {

	echo "jo";



	}

	else {

	$sql = "SELECT *  FROM  add_tutor WHERE subject='$sub' AND address= '$loc' ";

	$result = $conn->query($sql);

	 if ($result->num_rows > 0) {

											// output data of each row

	while($row = $result->fetch_assoc()) {?>
		<div class="col-md-3">

		<div class="single-tutor">

			<p><span> Teacher Name : </span><?php echo $row["name"] ?></p>
			<p><span> Subject: </span><?php echo $row["subject"] ?></p>
			<p><span> location:</span> <?php echo $row["address"] ?></p>
			<p><span> teaching:</span> <?php echo $row["teaching"] ?></p>
			<a href="detailstutor.php?id=<?php  echo $row["id"] ?>">Details</a>

		</div>

		</div>



		<?php 	}

										}

else echo '<h1 class="error_message" style="text-align: center;color: red;">No Result Found</h1>';										}

										?>





	</div>

</div>



</section>
