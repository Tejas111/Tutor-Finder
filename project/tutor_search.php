<?php include("header.php"); ?>
<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/project/login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <style>
    /* ul{
          background-color:#eee;
          cursor:pointer;
     }*/
     li{
          padding:12px;
     }
     .btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  }
     </style>
</head>
<body>
<br /><br />

<form  method="POST" action="search_tutor.php">
<div class="container" style="width:500px;margin-top: 50px">
<label for="">Search Tutor</label>
<select class="form-control" name="subject" id="subject" placeholder="Enter the subject for your tutor">

  <option value="hindi">hindi</option>
  <option value="English">English</option>
  <option value="Math">Mathematics</option>
  <option value="Physic">Physics</option>
  <option value="Chemistry">Chemistry</option>
  <option value="Bio-logy">Biology</option>
  <option value="HigherMath">Kannada</option>
  <option value="Accounting">History</option>
  <option value="Finance">Geography</option>
  <option value="Marketing">Civics</option><br><br>


          <input type="text" name="country" id="country" class="form-control" placeholder="Enter your location" autocomplete="off"/>

              <div id="countryList"></div>
          <button   class="btn">search</button>
     </div>
   </form>
</body>
</html>
<script>
$(document).ready(function(){
$('#country').keyup(function(){
     var query = $(this).val();
     if(query != '')
     {
          $.ajax({
               url:"inc/search.php",
               method:"POST",
               data:{query:query},
               success:function(data)
               {
                    $('#countryList').fadeIn();
                    $('#countryList').html(data);
               }
          });
     }
});
$(document).on('click', 'li', function(){
     $('#country').val($(this).text());
     $('#countryList').fadeOut();
});
});
</script>
