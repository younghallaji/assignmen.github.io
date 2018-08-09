<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="hover.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
<link rel="stylesheet" href="login.css" type="text/css" />
<title>NACOSS OGITECH</title>
</head>
<body>
<?php include('header.php');?>
<div class="dropdown"><button class="button"> <?php echo "$_SESSION[matric] $_SESSION[level]"; ?> </button>
<div class="dropdown-content" id="myDropdown">
<a href="#" onclick="document.getElementById('id02').style.display='block'"> Change Password</a>
    <a href="#" onclick="document.getElementById('id01').style.display='block'">Change Image</a>
    </div>
</div>
<div class="container">
<div class="time">
<?php 
$dt = new DateTime();
echo $dt->format('l,  F d,  y');
?>
<div class="image">
<img src="<?php  echo $_SESSION[image] ?> " width="150px" height="150px" />

</div>
</div>
<div class="stdmenu">
<a href="stddashboard.php"> <button class=menubutton>Home</button></a> <br />
<a href="studentpage.php"> <button class=menuactive>Upload Assignment</button></a> <br />
<a href="message.php"> <button class=menubutton>Message</button></a><br />
<a href="studentprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<form action="assignmentcode.php" method="POST" enctype="multipart/form-data">
<div class="assignment">
<label><b>COURSE CODE:</b></label><br />
								<select class="inputtext" name="coursecode">
                                <?php 
                                session_start();
                                $level= $_SESSION['level'];
                                mysql_connect("localhost","root","");
                                mysql_select_db("submission");
                                    $sel="SELECT * FROM course_code WHERE level = '$level' ";
                                    $sel2=mysql_query($sel);
                                    $sel3=mysql_num_rows($sel2);
                                    while($sel3>0){
                                    $sel4=mysql_fetch_array($sel2);
                                    echo"<option>$sel4[coursecode]</option>";
                                    $sel3=$sel3-1;
                                    }
                                    
                                ?>
                            </select><BR /><BR />
<label><b>CHOOSE ASSIGNMENT:</b></label><br />	
<input type="file" name="assignment" id ="assignment" class="inputtext" required ><br /><br />
<label><b>ASSIGNMENT NO:</b></label><br />	
								<select class="inputtext" name="assno" >
                                <option> Assignment 1</option>
                                <option> Assignment 2</option>
                                <option> Assignment 3</option>
                                <option> Assignment 4</option>
                                <option> Assignment 5</option>
                                <option> Assignment 6</option>
                                <option> Assignment 7</option>
                                <option> Assignment 8</option>
                                <option> Assignment 9</option>
                                <option> Assignment 10</option>
                                </select><br /><br />
<center><input type="submit" name="submit" class="submit1" value="SUBMIT NOW" ></center>
</form>
</div>
<div class="pblink">SUBMIT ASSIGNMENT NOW</div>

</div>

<div id="id01" class="modal">
  
  <form  action="image.php" method="POST">

    <div class="containers">
	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
      <input type="file"  name="image"  class="login" required="required" ><br />
        
      <button type="submit" class="button" name="submit">SUBMIT</button>
    </div>
  </form>
</div>


<div id="id02" class="modal">
  
  <form  action="password.php" name="login" enctype="multipart/form-data" method="post">

    <div class="containers">
	<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
     
      <input type="password" placeholder="Enter Password" name="password" required class="login"><br />
        
      <button type="submit" class="button">SUBMIT</button>
    </div>
  </form>
</div>












<?php include('footer.php'); ?>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
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
</body>
</html>
