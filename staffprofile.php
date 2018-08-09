<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index2.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
<title>NACOSS OGITECH</title>
</head>
<body>
<?php include('header.php');?>
<div class="container">
<div class="image">
<img src="<?php  echo $_SESSION[image] ?> " width="150px" height="150px" />

</div>
<div class="calendar">
<a href="lecturalpage.php"> <button class=menubutton>Home</button></a> <br />
<a href="messagelec.php"> <button class=menubutton>Message</button></a><br />
<a href="staffprofile.php"> <button class=menuactive>Profile</button></a><br />
<a href="genass.php"> <button class=menubutton>View Assignment</button></a><br />
<a href="staffedit.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>

<div class="profile"> 
<table height=" 300px" width="500">
<tr><td>Surname:</td><td><?php echo"$_SESSION[surname]";?></td></tr>
<tr><td>First Name:</td><td><?php echo"$_SESSION[firstname]";?></td></tr>
<tr><td>Other Name:</td><td><?php echo"$_SESSION[othername]";?></td></tr>
<tr><td>E-mail:</td><td><?php echo"$_SESSION[email]";?></td></tr>
<tr><td>Phone Number:</td><td><?php echo"$_SESSION[phonenumber]";?></td></tr>
<tr><td>Course Code:</td><td><?php echo"$_SESSION[coursecode]";?></td></tr>
<tr><td>Level Lecturing:</td><td><?php echo"$_SESSION[level]";?></td></tr>
</table>
</div>

</div>
<?php include('footer.php');?>

</body>
</html>
