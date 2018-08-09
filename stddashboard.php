<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="hover.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
<title>NACOSS OGITECH</title>
</head>
<body>
<?php include('header.php');?>

<div class="dropdown"><button class="button"> <?php echo "$_SESSION[matric] $_SESSION[level]"; ?> </button>
<div class="dropdown-content" id="myDropdown">
<a href="changestdpass.php">
<button class="button" onclick="document.getElementById('id02').style.display='block'"> Change Password</button></a>
<a href="changestdimage.php">
    <button class="button" onclick="document.getElementById('id01').style.display='block'">Change Image</button></a>
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
<a href="stddashboard.php"> <button class=menuactive>Home</button></a> <br />
<a href="studentpage.php"> <button class=menubutton>Upload Assignment</button></a> <br />
<a href="message.php"> <button class=menubutton>Message</button></a><br />
<a href="studentprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<div class="list">
<label class="dash">DASHBOARD</label>
<hr color="#03f"/>
<div class="stdnum">
NUMBER OF ALL COURSE MATE<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM student_reg WHERE level='$_SESSION[level]'";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="coursemate.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

<div class="lecnum">
NUMBER OF ALL REGISTERD COURSES<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM course_code WHERE level='$_SESSION[level]'";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="stdcourse.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

<div class="assnum">
NUMBEER OF ALL ASSIGNMENT SUBMITED<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM assignment WHERE matricno = '$_SESSION[matric]' ";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="subassignment.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

<div class="coursenum">
NUMBEER OF INBOX AND SENT MESSAGE<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM message WHERE sender = '$_SESSION[matric]' OR reciever = '$_SESSION[level]' 
OR reciever = '$_SESSION[matric]' ";
$query=mysql_query($select) or die(mysql_error());
$num=mysql_num_rows($query);
?>
<a href="message.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

</div>
<?php include('footer.php'); ?>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>
