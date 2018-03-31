
<?php include("header.php"); ?>

<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	$sub=$_POST['subject'];
		$class=$_POST['class_student'];
	if($sub==null) {
	echo "jo";
	
	}
	else {
	$sql = "SELECT *  FROM  add_tutor WHERE teaching_sub='$sub'  ";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">

			<p><span> Teacher Name : </span><?php echo $row["name"] ?></p>
			<p><span> Subject: </span><?php echo $row["teaching_sub"] ?></p>
			<p><span>Teacher Qualification:</span> <?php echo $row["qualification"] ?></p>
			<p><span> Area:</span> <?php echo $row["are"] ?></p>
			<p><span>Class :</span> <?php //echo $row["class"] ?></p>
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
 



  

  

<?php include("footer.php"); ?>