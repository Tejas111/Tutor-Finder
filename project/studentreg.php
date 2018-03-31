
<?php include("header.php"); ?>

<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if(isset($_SESSION['email']) && isset($_SESSION['password']) && ($_SESSION['user_type']=="teacher") ){
   header("Location: http://localhost/project/teacheradmin.php");
  }
  ?>

<section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Register As Student</h2>
        </div>
		<div class="row contact-wrap">

<div class="status alert alert-success" style="display: none"></div>

<div class="col-md-6 col-md-offset-3">
  <div  class="contactForm">

	<div class="form-group">

	  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="required"  />

	  <span class="error_message"id="name_error"></span>

	</div>
	<div class="form-group">

			<input type="text" class="form-control" name="collage_name" id="collage_name" placeholder="Age" required="required" />

		   <span class="error_message" id="institute_error"></span>

		  </div>

	<div class="form-group">

	  <input type="text" class="form-control" name="username" id="username" placeholder="Your User Name"required="required" />

	 <span class="error_message" id="username_error"></span>

	</div>

	<div class="form-group">

	  <input  class="form-control" type="text"   name="mobile" id="mobile" placeholder="Your Mobile Number" required="required" />

	 <span class="error_message" id="mobile_error"></span>

	</div>

		<div class="form-group">

	  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required="required" />

	 <span class="error_message" id="password_error"></span>

	</div>
	<div class="text-center"><button type="submit" id="submit"name="submit" class="btn btn-primary btn-lg" >Submit</button></div>
  </div>

  <div id="result"></div>

</div>

</div>

<!--/.row-->

</div>

<!--/.container-->

</section>
</body>

<!--/#contact-page-->

<script src="js/jquery-2.js"></script>

<script type="text/javascript">



$(document).ready(function(){

$("#name_error").hide();

$("#mobile_error").hide();

$("#password_error").hide();

$("#institute_error").hide();

$("#username_error").hide();


var error_name = false;

var error_password = false;

var error_college = false;

var error_username = false;

var error_mobile= false;

$("#name").focusout(function() {



check_name();



});



$("#username").focusout(function() {



check_usrname();



});



$("#mobile").focusout(function() {



check_mobile();



});



$("#password").focusout(function() {



check_password();



});



$("#collage_name").focusout(function() {



check_college_name();

});

function check_password() {
var password_length = $("#password").val().length;
if(password_length < 6) {

	$("#password_error").html("At least 6 characters");

	$("#password_error").show();



} else {

	$("#password_error").hide();

	error_password = true;

}
}



function check_college_name() {



var college_length = $("#collage_name").val();
if(college_length < 1) {

	$("#institute_error").html("Type Valid age");

	$("#institute_error").show();
} else {

	$("#institute_error").hide();

	error_college = true;

}



}


function check_name() {
var name_length = $("#name").val().length;
if(name_length < 1) {

	$("#name_error").html("Type Your Name");

	$("#name_error").show();



} else {

	$("#name_error").hide();

	error_name = true;

}



}


function check_usrname () {

var mobile_length = $("#username").val().length;



if(mobile_length <6) {

	$("#username_error").html("Atleast 6 Character");

	$("#username_error").show();



} else {

	$("#username_error").hide();

	error_username = true;

}



}

function check_mobile () {

var mobile_length = $("#mobile").val().length;



if(mobile_length <10) {

	$("#mobile_error").html("Mobile number must be 10 Digits");

	$("#mobile_error").show();



} else {

	$("#mobile_error").hide();

	error_mobile = true;

}



}
$("#submit").click(function(){



check_password();

check_usrname();

check_mobile();

check_name();

check_college_name();



if(error_name==true && error_username==true && error_password==true && error_mobile==true && error_college==true) {
var t_name=$("#name").val();

var username=$("#username").val();

var t_mob=$("#mobile").val();

var t_pass=$("#password").val();
var college_name=$("#collage_name").val();
			$.ajax({
		url:'inc/studentreg.php',

		data:{name:t_name,username:username,mobile:t_mob,password:t_pass,college_name:college_name},

		type:'POST',

		success:function(data){

			$("#result").html(data);
		}

	});
	}

});
});
	
	
	
	
	
	
	</script> 	


<?php include("footer.php"); ?>