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
<a href="subassignment.php"> <button class=menuactive>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />

</div>
<div class="subassignment" >
<table width="880"  border=1 style="border-collapse:collapse;">
            <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>ASSIGNMENT NO</td>
            <td>DATE & TIME</td><td>GRADE</td><td>DOWNLOAD</td></tr>

<?php 
mysql_connect("localhost", "root", "");
mysql_select_db("submission");
$sel= "SELECT * FROM assignment WHERE matricno = '$_SESSION[matric]'";
$query = mysql_query($sel) or die(mysql_error());
$num = mysql_num_rows($query);
while($num > 0){
$fetch = mysql_fetch_array($query);
echo"<tr><td>".$fetch['matricno']."</td><td>".$fetch['coursecode']."</td>
<td>".$fetch['assno']."</td><td>".$fetch['time']."</td>
<td>".$fetch['status']."</td><td><a href=$fetch[file]><img src=image/dsmall.jpg></a></td>";
$num=$num-1;
}
?>
</table>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>