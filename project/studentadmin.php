
<?php include("header.php"); ?>
<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/project/");
  }
  
 					
	include("inc/constant.php");
	$email=$_SESSION['email'];
	$sql = "SELECT *  FROM student WHERE username='$email'";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$name=$row["name"];
	$institute_name=$row["institute_name"];
	$number=$row["mobile"];
	}
}

else {

echo "fff";}	
	
 ?>

<section id="contact-page">
    <div class="container">
       <div class="center">
        <h2 align="center">Student Panel</h2>
        </div>
      <div class="center"> <a class="btn btn-danger"href="inc/logout.php">logout</a>
        </div>
   
   
   <div class="row"> 
   
				<div class="col-md-6"> 
		<h3> Request Tutor </h3>
          
          
          <div class="contactForm">
		
			<div class="form-group">
              <input  class="form-control" type="text"   name="location" id="location" placeholder="Your Location" required="required" />
             <span class="error_message" id="mobile_error"></span>
            </div>
           
              <input type="hidden" name="name" class="form-control" id="name" value="<?php echo $name ?>"  />
              <input type="hidden" class="form-control" name="mobile" id="number" value="<?php echo $number ?>" />
            
			  
			
			   <div class="form-group">
						<input class="form-control" name="teaching" id="teaching" placeholder="Teaching Experence">
						  
				</div>
			
				<div class="form-group">
						<input class="form-control" name="subject" id="subject" placeholder="For Subject">
						  
				</div>
			
            <div class="text-center"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" >Submit </button></div>
          </div>
		  <div id="result"></div>
			</div>
	
	<div class="col-md-1"></div>
				
				<div class="col-md-5 teacherinfo"> 
					<h3>Student Account Details </h3>
					
					
					

	
	
		

	<div class="single-tutor">
		<div class="tutor-are">
				<div class=""><h3><?php echo $name ?></h3></div>
				
		
		</div>
			
			<p><span>Institute Name:</span> <?php echo $institute_name ?></p>
			<p><span>Number:</span> <?php echo $number ?></p>
			
		</div>
	

				
				</div>
   
   
   </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
 
<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		
		$("#submit").click(function(){
		
		var name=$("#name").val();
		var email="N/A";
		var mob=$("#number").val();
		var area=$("#location").val();
		var sub=$("#subject").val();
		var teaching=$("#teaching").val();
		
		

	
		
					$.ajax({
				
				
				url:'inc/tutor_req.php',
				data:{name:name,email:email,area:area,mobile:mob,teaching:teaching,subject:sub},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	</script> 



<?php include("footer.php"); ?>