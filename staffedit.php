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
<img src="<?php  echo $_SESSION[image] ?> " width="150px" height="150px"  />

</div>
<div class="calendar">
<a href="lecturalpage.php"> <button class=menubutton>Home</button></a> <br />
<a href="messagelec.php"> <button class=menubutton>Message</button></a><br />
<a href="staffprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="genass.php"> <button class=menubutton>View Assignment</button></a><br />
<a href="staffedit.php"> <button class=menuactive>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<form method="POST" action="editcode.php" enctype="multipart/form-data">
<div class="editprofile"> 
<label><b>First Name:</b></label><br />
<input type="text" readonly="readonly" name="firstname" value="<?php echo"$_SESSION[firstname]";?>" /><br />
<label><b>Other Name:</b></label><br />
<input type="text" readonly="readonly" name="othername" value="<?php echo"$_SESSION[othername]";?>" /><br />
<label><b>Surname:</b></label><br />
<input type="text" readonly="readonly" name="surname" value="<?php echo"$_SESSION[surname]";?>" /><br />
<label><b>Password:</b></label><br />
<input type="text" name="password" value="<?php echo"$_SESSION[password]";?>" /><br />
<label><b>Phone Number</b></label><br />
<input type="text" name="phonenumber" value="<?php echo"$_SESSION[phonenumber]";?>" /><br />
<label><b>E-Mail:</b></label><br />
<input type="email" name="email" value="<?php echo"$_SESSION[email]";?>" /><br />
<label><b>Image:</b></label><br />
<input type="file" name="image" /><br /><br />
<input type="submit" name="update" value="UPDATE" class="submit1" />
</div>
</form>
</div>
<?php include('footer.php');?>

 <script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>
