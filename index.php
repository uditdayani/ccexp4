<!--
  
  id01 is student login 
id02 is admin login 
id03 is forgot password-student
id03 is forgot password-admin 
------------------------
4 pages for before login 
index.html
null_analysis.php
graphs/bef_login_graph.php
contact_before.html
-->
<?php
require_once "config.php";
$loginURL = $gClient -> createAuthUrl();    
?>
<!DOCTYPE html>

<html lang="">
<script> 
  
var modal = document.getElementById('id01'); 
window.onclick = function(event) { 
    if (event.target == modal) { 
        modal.style.display = "none"; 
    } 
} 
var modal2 = document.getElementById('id02'); 
window.onclick = function(event) { 
    if (event.target == modal2) { 
        modal2.style.display = "none"; 
    } 
} 
var modal3 = document.getElementById('id03'); 
window.onclick = function(event) { 
    if (event.target == modal3) { 
        modal3.style.display = "none"; 
    } 
} 
var modal4 = document.getElementById('id04'); 
window.onclick = function(event) { 
    if (event.target == modal4) { 
        modal4.style.display = "none"; 
    } 
} 
</script> 

<head>
<title>Record Book</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="layout/styles/login.css"> 
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
   background-color: rgba(0,0,0,0.8);
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color:#DC143C	;
}

/* Caption text */
.text {
  color: #000000;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color:white
}



/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #000000;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
footer{

 position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
   background-color: black;
   color: white;
   #A2B70D
   text-align: center;
   height:max-content;
}
</style>
</head>
<body id="top" style="background-image: url('images/demo/backgrounds/image.jpg');>

<div class="bgded overlay" > 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1>
            <img   class ="logo2"  height="80" width="80" src="images/demo/logo2.png">   
            <a href="index.php">Departmental Record Book</a>
            <img   class ="logo1"  height="80" width="80" src="images/demo/logo1.png"> 
          </h1>

          

      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
      
          <li><a class="drop" href="#">Analysis</a>
            <ul>
              <li><a href="null_analysis.php">Tabular</a></li>
          
              <li><a href="graphs/bef_login_graph.php">Graphical</a></li>
            </ul>
          </li>
          <li><a   onclick="document.getElementById('id02').style.display='block'" style="width:auto;" href="#">Admin</a></li>
          <li><a href="contact_before.html">Help</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>

  <section id="pageintro" class="hoc clear">
    <div> 
      <!-- ################################################################################################ -->
      <h2 style="font-size: 30px;     margin-top: 19px;" class="heading">Department of Computer Engineering</h2>
      <p style=" font-size: 26px; ">K. J.  Somaiya  College  Of  Engineering,  Vidyavihar  </p>
<br>	
 <a class="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Student login with username</a>
  <!-- <button onClick ="window.location = '''" type="submit">Sign in with Google </button>  -->
  <br><br>
  <a class="btn" onclick="window.location = '<?php echo $loginURL ?>'" style="width:auto;">Student login with google</a>
  
<br><br><br>
        <div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="slideshow/1.jpg" style="width:1100px ;height:400px;     margin-top: 74px;">
  <div class="text">SIH 2019 WINNERS</div>
</div>

<div class="mySlides fade">
  
  <img src="slideshow/2.jpg" style="width:1100px ;height:400px;   margin-top: 74px;">
  <div class="text">SIH 2019 WINNERS</div>
</div>

<div class="mySlides fade">

  <img src="slideshow/3.jpeg" style="width:1100px ;height:400px;   margin-top: 74px;">
  <div class="text">SIH 2019 WINNERS</div>
</div>
<div class="mySlides fade">

  <img src="slideshow/4.jpg" style="width:1100px ;height:400px;   margin-top: 74px;">
  <div class="text">E-SUMMIT I_HACK HACKATHON 2019 WINNERS</div>
</div>
<div class="mySlides fade">

  <img src="slideshow/5.jpeg" style="width:1100px ;height:400px;   margin-top: 74px;">
  <div class="text">BITCAMP 2019 WINNERS</div>
</div>
<div class="mySlides fade">

  <img src="slideshow/6.jpeg" style="width:1100px ;height:400px;   margin-top: 74px;">
  <div class="text">BITCAMP 2019 WINNERS</div>
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>

   
  
<div id="id01" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_user.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">STUDENT LOGIN</h3>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   


  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a  onclick="document.getElementById('id03').style.display='block' ; document.getElementById('id01').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
	</div>
  </form> 
</div> 


<!-- ADMIN MODAL -->
<div id="id02" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/registered_admin.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">ADMIN LOGIN</h3><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="uname"  placeholder="SVV id" required> 
  
      <label style="color: black;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" style="color:black"  name="pword"  required> 
          
      <button type="submit">Login</button> 
      
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> 
      
      <span class="psw"><a onclick="document.getElementById('id04').style.display='block' ; document.getElementById('id02').style.display='none' " style="width:auto;">Forgot password?/New User?</a></span> 
    </div> 
  </form> 
</div> 


<!-- Forgot password - student Modal -->

<div id="id03" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_student.php"> 
    <div class="imgcontainer"> 
  <h3 style="color:black;">STUDENT LOGIN</h3>
 
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 

<!-- Forgot password - admin Modal -->

<div id="id04" class="modal"> 
    
  <form class="modal-content animate" method="POST"  action="php/forgot_admin.php"> 
    <div class="imgcontainer"> 
	<h3 style="color:black;">ADMIN LOGIN</h3>
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">×</span> 
        <img src="images/demo/avatar.png" alt="Avatar" class="avatar">
      
    </div> 
   
  
    <div class="container"> 
      <label style="color: black;"><b>Username</b></label> 
      <input type="text" name="svv"  placeholder="SVV id" required> 
  
      <button type="submit">Email Password</button> 
     <!--  <input type="checkbox" checked="checked"> Remember me  -->
    </div> 
  
    <div class="container" style="background-color:#f1f1f1"> 

      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button> 
      
    </div> 
  </form> 
</div> 
 </div>




   <footer>
<h3 style="margin-top:5px;"> For any further queries Email us at admin@somaiya.edu</h3>
<a href="contact_before.html" style="font-size: 20px;">Click here for general FAQs</a>
</footer>

      <!-- ################################################################################################ -->
   
  </section>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>
