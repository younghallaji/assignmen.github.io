<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NACOSS OGITECH</title>
<link href="index.css" type="text/css" rel="stylesheet" />
<link href="admin.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
</head>
<body>
<?php include('header.php');?>
<div class="container">

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">LOGIN</button>
  <div id="myDropdown" class="dropdown-content">
    <button onclick="document.getElementById('id02').style.display='block'"> LECTURAL</button>
    <button onclick="document.getElementById('id01').style.display='block'">STUDENT</button>
</div>
</div>
<div class="time"><?php 
$dt = new DateTime();
echo $dt->format('l,  F d,  y');
?>
</div>
<div class="slider">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider/ict.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider/gate.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="slider/lab.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<div style="text-align:center">
  <span class="dot" onClick="currentSlide(1)"></span> 
  <span class="dot" onClick="currentSlide(2)"></span> 
  <span class="dot" onClick="currentSlide(3)"></span> 

</div>
</div>
<!--poop up login start-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="studentlog.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/icon_login.png" alt="Avatar" class="avatar">
    </div>

    <div class="contain">
      <label><b>MATRIC NO</b></label>
      <input type="text" placeholder="Enter Matric No" class="logininput" required="required" name="matric">

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" class="logininput" required="required" name="pwd">
        
      <button type="submit">Login</button>
    </div>

    <div class="contain" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>


<div id="id02" class="modal">

    <form class="modal-content animate" action="lecturallog.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/stafflogin.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="contain">
      <label><b>SURNAME</b></label>
      <input type="text" placeholder="Enter Surname" class="logininput" required="required" name="sname">

      <label><b>PASSWORD</b></label>
      <input type="password" placeholder="Enter Password" class="logininput" required="required" name="pwd">
        
      <button type="submit">Login</button>
    </div>

    <div class="contain" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>


<!-- login stop-->
<div><?php include('footer.php');?></div>
<div class="calendar"></div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
	}
	window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var a;
    for (a = 0; a < dropdowns.length; a++) {
      var openDropdown = dropdowns[a];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>
