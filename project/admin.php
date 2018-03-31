
<?php include("header.php"); ?>

<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/project/");
  }
  
 
 ?>


<section id="contact-page">
    <div class="container">
	<div style="float:right"> <a class="btn btn-danger"href="inc/logout.php">logout</a></div>
      <div class="center">
        <h2 >Admin Panel</h2>
        </div>
		 
        </div>
			<div class="col-md-6" style="padding-left:40px"> 
		
          <h4 style="padding-left:200px;color:coral">Addition of Tutor</h4>
          
          <div  class="contactForm">
		  	<div class="form-group" >

			<input type="text" name="name" class="form-control" id="name" placeholder=" Name" required="required"  />
		</div>

		<div class="form-group">

			<input type="email" class="form-control" name="email" id="email" placeholder=" Email"required="required" />

		</div>

		<div class="form-group">
						
						<select class="form-control" name="subject" id="subject">
						  <option>Subject</option>
						  <option value="kannada">Kannada</option>
						  <option value="English">English</option>
						  <option value="Mathematics">Mathematics</option>
						  <option value="History">History</option>
						  <option value="Geography">Geography</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Bio-logy">Bio-logy</option>
						  <option value="Computer-science">Computer-science</option>
						  <option value="Electronics">Electronics</option>
						  <option value="Statistics">Statistics</option>
						  <option value="Economics">Economics</option>
						  
						 
						  
						  
						  
						</select>
			</div>


		<div class="form-group">

 			<input type="number"class="form-control" name="teaching" id="teaching" placeholder="Experience"  style="border-radius: 5px;">
		</div>
		<div class="form-group">

			<input  class="form-control" type="text"   name="mobile" id="mobile" placeholder=" Mobile Number" required="required" />

		

		</div>

  		
		<div class="form-group">

			<input type="text "class="form-control" id="addr" name="addr" placeholder="Address" required="required"/>

		</div>
            <div class="text-center"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" >Submit </button></div>
          </div>
		  <div id="result"></div>
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
		
		var t_name=$("#name").val();
		var t_email=$("#email").val();
		var t_mob=$("#mobile").val();
		var t_area=$("#addr").val();
		var sub=$("#subject").val();
		var t_teaching=$("#teaching").val();
		

	
		
					$.ajax({
				
				
				url:'inc/admin_backend.php',
				data:{name:t_name,email:t_email,mobile:t_mob,teaching:t_teaching,subject:sub,addr:t_area},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	
	
	</script> 

<?php include("footer.php"); ?>