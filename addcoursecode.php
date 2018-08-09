<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index2.css" type="text/css" />
<link href="" rel="stylesheet" type="text/css" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
<title>NACOSS OGITECH</title>
</head>
<body>

<?php include('header.php');?>
<div class="container">

<div class="image">
<img src="image/admin.png" width="150px" height="150px" />
</div>

<div class="calendar">
<a href="adminpage.php"> <button class=menubutton>Home</button></a> <br />
<a href="messageadmin.php"> <button class=menubutton>Message</button></a><br />
<a href="addlectural.php"> <button class=menubutton>Add Lectural</button></a><br />
<a href="addstudent.php"> <button class=menubutton>Add Student</button></a><br />
<a href="addcoursecode.php"> <button class=menuactive>Add Course Code</button></a><br />
<a href="allass.php"> <button class=menubutton>Assignment</button></a><br />
<a href="allstudent.php"> <button class=menubutton>Students</button></a><br />
<a href="alllectural.php"> <button class=menubutton>Lectural</button></a><br />
<a href="allcourse.php"> <button class=menubutton>Courses</button></a><br />
<a href="logout2.php"> <button class=menubutton>Logout</button></a><br />
</div>
<form method="post" action="coursecodereg.php">
<div class="list2">
<label><input type="text" placeholder="COURSE TITLE" name="coursetitle" required="required" /></label><br /><br />
<span class="font1">COURSE CODE FORMART(COM 111, COM 211, COM 311, COM 411 ...)</span>
<label><input type="text" placeholder="COURSE CODE" name="coursecode" required="required" /></label><br /><br />
<label><input type="text" placeholder="COURSE UNITS" name="courseunit" required="required" /></label><br /><br />
<select name="semester">
<option>FIRST SEMESTER</option>
<option>SECOND SEMESTER</option>
</select><br /><br />
<select name="level">
<option>ND I</option>
<option>ND II</option>
<option>HND I</option>
<option> HND II</option>
</select><br /><br />
<center><input type="submit" value="SUBMIT" name="submit" class="submit1"  /></center>
</div>
</form>
</div>
<?php include('footer.php'); ?>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>