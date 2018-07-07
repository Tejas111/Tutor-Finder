<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutor-Finder</title>

  <!-- Bootstrap -->
  <link href="css/grid.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  
  <style type="text/css"> 
  
 span.error_message {
 
 color:red;
 }
 
.search {
    width: 47%;
    float: left;
    margin-left: 3%;
}
  
  .searbtn {
    margin-top: 28px;
    margin-left: 1%;
    padding: 2px 20px;
    background: LightBlue;
    color: #fff;
    border: none;
    padding: 5px 26px;
    border-radius: 17px;
}
  .search .form-group {
width:100%;
float:left;

}
  </style>
<style>
body {margin:0;font-family:Arial}

.tdm-topnav {
  overflow: hidden;
  background: linear-gradient(to right, #00C9FF 0%, #92fe9d 100%);
}

.tdm-topnav a {
  float: left;
  display: block;
  color:white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.tdm-topnav .icon {
  display: none;
}

.tdm-dropdown {
    float: left;
    overflow: hidden;
}

.tdm-dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.tdm-dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.tdm-dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.tdm-topnav a:hover, .tdm-dropdown:hover .dropbtn {
  background-color: white;
  color: #33cc00;
  font-weight:bold;
}

.tdm-dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.tdm-dropdown:hover .tdm-dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .tdm-topnav a:not(:first-child), .tdm-dropdown .dropbtn {
    display: none;
  }
  .tdm-topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .tdm-topnav.responsive {position: relative;}
  .tdm-topnav.responsive .icon {
    position: absolute; 
    right: 0;
    top: 0;
  }
  .tdm-topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .tdm-topnav.responsive .tdm-dropdown {float: none;}
  .tdm-topnav.responsive .tdm-dropdown-content {position: relative;}
  .tdm-topnav.responsive .tdm-dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="tdm-topnav" id="mytdm-topnav">
  <a>TUTOR FINDER</a>
  <a href="home_page.php">Home</a>
  <a href="show_tutor_req.php">Search Tutor</a>

  <div class="tdm-dropdown">
    <button class="dropbtn">FAQ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="tdm-dropdown-content">
      <a href="faq_stud.php">Student FAQ</a>
      <a href="faq_tut.php">Teacher FAQ</a>
    </div>
  </div>

  <div class="tdm-dropdown">
    <button class="dropbtn">REGISTER
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="tdm-dropdown-content">
      <a href="faq_stud.php">Student Register</a>
      <a href="faq_tut.php">Teacher Register</a>
    </div>
  </div>

  <a href="#about">Log In</a>
  <a href='panel.php' class='has-sub'><span>Admin</span></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="mytdmFunction()">&#9776;</a>
</div>


<script>
function mytdmFunction() {
    var x = document.getElementById("mytdm-topnav");
    if (x.className === "tdm-topnav") {
        x.className += " responsive";
    } else {
        x.className = "tdm-topnav";
    }
}
</script>

</body>
</html>
