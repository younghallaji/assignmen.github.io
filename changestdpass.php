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
<a href="studentpage.php"> <button class=menubutton>Upload Assignment</button></a> <br />
<a href="message.php"> <button class=menubutton>Message</button></a><br />
<a href="studentprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<form method="post" action="password.php">
<div class="list2">
<label><input type="hidden" value="<?php echo"$_SESSION[password]"; ?>" name="password1" /></label>
<label><input type="password" placeholder="PASSWORD" name="password2" required="required" /></label><br /><br />
<label><input type="password" placeholder="NEW PASSWORD" name="password3" required="required" /></label><br /><br />
<label><input type="password" placeholder="CONFIRM NEW PASSWORD" name="password4" required="required" /></label><br /><br />
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