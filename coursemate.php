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