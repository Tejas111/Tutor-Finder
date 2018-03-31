 
<?php include("header.php"); ?>
<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM  tutor_request";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-3"> 
		<div class="single-tutor">
		
			<p><span>Requested Subject: </span><?php echo $row["subject"] ?></p>
			<p><span>Requested Teacher Experience:</span> <?php echo $row["teaching"] ?></p>
			<p><span>Request Area:</span> <?php echo $row["area"] ?></p>
			<a href="detailstutorreq.php?id=<?php  echo $row["id"] ?>">Details</a>
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  

  

<?php include("footer.php"); ?>