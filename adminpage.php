<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NACOSS OGITECH</title>
<link href="index2.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
</head>
<body>
<?php include('header.php');?>
<div class="container">
<div class="image">
<img src="image/admin.png" width="150px" height="150px" />

</div>
<div class="calendar">
<a href="adminpage.php"> <button class=menuactive>Home</button></a> <br />
<a href="messageadmin.php"> <button class=menubutton>Message</button></a><br />
<a href="addlectural.php"> <button class=menubutton>Add Lectural</button></a><br />
<a href="addstudent.php"> <button class=menubutton>Add Student</button></a><br />
<a href="addcoursecode.php"> <button class=menubutton>Add Course Code</button></a><br />
<a href="allass.php"> <button class=menubutton>Assignment</button></a><br />
<a href="allstudent.php"> <button class=menubutton>Students</button></a><br />
<a href="alllectural.php"> <button class=menubutton>Lectural</button></a><br />
<a href="allcourse.php"> <button class=menubutton>Courses</button></a><br />
<a href="logout2.php"> <button class=menubutton>Logout</button></a><br />
</div>

<div class="list">
<label class="dash">DASHBOARD</label>
<hr color="#03f"/>
<div class="stdnum">
NUMBER OF ALL REGISTERD STUDENT<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM student_reg";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="allstudent.php"><button class="button"><?php echo"$num";?></button></a>
</div>

<div class="lecnum">
NUMBER OF ALL REGISTERD LECTURAL<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM lectural_reg";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="alllectural.php"><button class="button"><?php echo"$num";?></button></a>
</div>

<div class="coursenum">
NUMBER OF ALL REGISTERD COURSES<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM course_code";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="allcourse.php"><button class="button"><?php echo"$num";?></button></a>
</div>

<div class="assnum">
ALL ASSIGNMENT SUBMITED<br /><br />
<?php
include('connect.php');
$select="SELECT * FROM assignment";
$query=mysql_query($select);
$num=mysql_num_rows($query);
?>
<a href="allass.php"><button class="button"><?php echo"$num";?></button></a>
</div>

</div>

</div>
<div class="footer"><?php include('footer.php');?></div>
</body>
</html>
