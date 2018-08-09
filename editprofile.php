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
<div class="dropdown"><button> <?php echo "$_SESSION[matric] $_SESSION[level]"; ?> </button>
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
<a href="stddashboard.php"> <button class=menubutton>Home</button></a><br />
<a href="studentpage.php"> <button class=menubutton>Upload Assignment</button></a> <br />
<a href="message.php"> <button class=menubutton>Message</button></a><br />
<a href="studentprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menuactive>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />

</div>
<div class="listp"> 
<form method="POST" action="studentedit.php" enctype="multipart/form-data">
<div class="editprofile"> 
<label><b>Surname:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<label><b>First Name:</b></label><br />
<input type="text" readonly="readonly" value="<?php echo"$_SESSION[surname]";?>" class="inputtext" />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<input type="text" readonly="readonly"  value="<?php echo"$_SESSION[firstname]";?>" class="inputtext"  /><br />
<label><b>Othername:</b></label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp;
<label><b>Matric No:</b></label><br />
<input type="text" readonly="readonly"  value="<?php echo"$_SESSION[othername]";?>" class="inputtext" />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<input type="text" readonly="readonly" value="<?php echo"$_SESSION[matric]";?>" class="inputtext" /><br />

<label><b>Level</b></label>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<label><b>E-Mail:</b></label><br />
<input type="text" name="level" value="<?php echo"$_SESSION[level]";?>" class="inputtext" />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
<input type="email" name="email" value="<?php echo"$_SESSION[email]";?>" class="inputtext" /><br /><br />
<center><input type="submit" name="update" value="UPDATE" class="button" /></center>
</div>
</form>
</div>
</div>
<?php include('footer.php'); ?>
<body>
</body>
</html>
