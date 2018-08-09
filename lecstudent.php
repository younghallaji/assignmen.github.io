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
<div class="subassignment" >
<table border="1" class="table"><tr>
<td>MATRIC NO</td><td>FIRST NAME</td><td>OTHER NAME</td><td>SURNAME</td><td>LEVEL</td>
<td>E-MAIL</td></tr>

<?php
            session_start();
            $code=$_SESSION['coursecode'];
          	include('connect.php');
            $sel = "SELECT * FROM student_reg WHERE level ='$_SESSION[level]'";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
    echo"<tr><td>".$f4['matricno']."</td><td>".$f4['firstname']."</td><td>".$f4['othername']."</td>
	<td>".$f4['surname']."</td><td>".$f4['level']."</td><td>".$f4['email']."</td></tr>";
    $sel2=$sel2-1;
            }
        ?>
</table>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>