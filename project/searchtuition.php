
<?php include("header.php"); ?>







<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	$sub=$_POST['subject'];
	$class=$_POST['class_student'];
	
	$sql = "SELECT *  FROM  tutor_request WHERE subject='$sub' AND class='$class' ";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">
		
			
			<p><span> Subject: </span><?php echo $row["subject"] ?></p>
			<p><span>Teacher Qualification:</span> <?php echo $row["t_qualification"] ?></p>
			<p><span> Area:</span> <?php echo $row["area"] ?></p>
			<p><span>Class :</span> <?php echo $row["class"] ?></p>
			
			
			<a href="detailstutorreq.php?id=<?php  echo $row["id"] ?>">Details</a>
		</div>
		</div>
		
		<?php 	} 
										}  else echo '<h1 class="error_message" style="text-align: center;color: red;">No Result Found</h1>';	?>
		
	
	</div>
</div>
	
</section>
 



  

  

<?php include("footer.php"); ?>