<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="hover.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
<title>NACOSS OGITECH</title>
</head>
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
<a href="studentpage.php"> <button class=menubutton>Upload Assignment</button></a> <br />
<a href="message.php"> <button class=menubutton>Message</button></a><br />
<a href="studentprofile.php"> <button class=menuactive>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />

</div>
<div class="profile"> 
<table height=" 400px" width="500">
<tr><td></td><td></td><td align="right"><img src="<?php echo$_SESSION[image];?> " width="150" height="150" /></td></tr>
<tr><td>Surname:</td><td><?php echo"$_SESSION[surname]";?></td></tr>
<tr><td>First Name:</td><td><?php echo"$_SESSION[firstname]";?></td></tr>
<tr><td>Other Name:</td><td><?php echo"$_SESSION[othername]";?></td></tr>
<tr><td>E-mail:</td><td><?php echo"$_SESSION[email]";?></td></tr>
<tr><td>Matric No:</td><td><?php echo"$_SESSION[matric]";?></td></tr> 
<tr><td>Level:</td><td><?php echo"$_SESSION[level]";?></td></tr>
</table>
</div>
</div>
<?php include('footer.php'); ?>
<body>
</body>
</html>
