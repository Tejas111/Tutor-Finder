<?php 
					 if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
	  if(isset($_SESSION['user_type'])  ){

if($_SESSION['user_type']=="admin") {
 header("Location: http://localhost/project/admin.php");
}	  
 
 if ($_SESSION['user_type']=="teacher") {
   header("Location: http://localhost/project/teacheradmin.php");
 }	
 if ($_SESSION['user_type']=="student") {
   header("Location: http://localhost/project/studentadmin.php");
 }	


	  
	  }
	  
	  else {
	   header("Location: http://localhost/project/index.php");
	  }
  ?>