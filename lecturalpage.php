<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nacoss Ogitech</title>
<link href="index2.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
</head>
<body>
<?php include('header.php');?>
<div class="container">
<div class="image">
<img src="<?php  echo $_SESSION[image] ?> " width="150px" height="150px" />

</div>
<div class="calendar">
<a href="lecturalpage.php"> <button class=menuactive>Home</button></a> <br />
<a href="messagelec.php"> <button class=menubutton>Message</button></a><br />
<a href="staffprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="genass.php"> <button class=menubutton>View Assignment</button></a><br />
<a href="staffedit.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<div class="list">
<label class="dash">DASHBOARD</label>
<hr color="#03f"/>
<div class="stdnum">
NUMBER OF STUDENT<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM student_reg WHERE level='$_SESSION[level]'";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="lecstudent.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

<div class="assnum">
NUMBEER OF ALL ASSIGNMENT SUBMITED<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM assignment WHERE coursecode = '$_SESSION[coursecode]' ";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="genass.php"><button class="button1"><?php echo"$num";?></button></a>
</div>

</div>
<div class="footer"><?php include('footer.php');?></div>
</body>
</html>
