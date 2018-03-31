
<?php include("header.php"); ?>
  <!--/#main-slider-->
<section id="tutorlist"> 

<div class="container">
	<div class="row"> 
	<h2> Featured Tutors</h2>
	
	<?php 
	
	 $id=$_GET['id'];
	include("inc/constant.php");
	
	$sql = "SELECT *  FROM add_tutor WHERE id=$id";
	$result = $conn->query($sql);
	 if ($result->num_rows > 0) {
											// output data of each row
	while($row = $result->fetch_assoc()) {?>
	
	
		<div class="col-md-6"> 
		<div class="single-tutor">
		<div class="tutor-are">
				<div class="tutor-iteam"><h3><?php echo $row["name"] ?></h3></div>
				<div class="tutor-img"><h3><img src="images/img_avatar.png" alt="" /></h3></div>
		
		
		</div>
			
			<p><span>Teaching:</span> <?php echo $row["teaching"] ?></p>
			<p><span>Address:</span> <?php echo $row["address"] ?></p>
			<p><span>Subject_Taught: </span><?php echo $row["subject"] ?></p>
			<div class="contact_info"> 
			<p><span>Contact Info</span></p>
				<?php 
			
			if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(isset($_SESSION['email']) && isset($_SESSION['password']) ){?>
			<p><span>Email: </span><?php echo $row["email"] ?></p>
			<p><span>Contact Number: </span><?php echo $row["number"] ?></p> 
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