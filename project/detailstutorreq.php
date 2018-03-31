
<?php include("header.php"); ?>

  <!--/#main-slider-->

<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	
	 $id=$_GET['id'];
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM tutor_request WHERE id=$id";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-6"> 
		<div class="single-tutor">
		
			<p><span>Requested Tutor Subject: </span><?php echo $row["subject"] ?></p>
			<p><span>Requested Tutor Experience:</span> <?php echo $row["teaching"] ?></p>
			<p><span>Requested Tutor Area:</span> <?php echo $row["area"] ?></p>
			
			<div class="contact_info"> 
			<h3>Contact Info</h3>
				<?php 
			
			if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(isset($_SESSION['email']) && isset($_SESSION['password']) ){?>
			<p><span>Name: </span><?php echo $row["gurdian_name"] ?></p>
			<p><span>Email: </span><?php echo $row["email"] ?></p>
			<p><span>Contact Number: </span><?php echo $row["gurdian_mobile"] ?></p> 
			<?php 
			} else 
			echo '<a href="login.php">Login For Show Details</a>';
			?>
			
			</div>
			
		</div>
		</div>
		
		<?php 	}
										} ?>
		
	
	</div>
</div>
	
</section>
 



  


  <!--/#conatcat-info-->


<?php include("footer.php"); ?>