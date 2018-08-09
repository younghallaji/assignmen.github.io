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
<a href="addcoursecode.php"> <button class=menubutton>Add Course Code</button></a><br />
<a href="allass.php"> <button class=menuactive>Assignment</button></a><br />
<a href="allstudent.php"> <button class=menubutton>Students</button></a><br />
<a href="alllectural.php"> <button class=menubutton>Lectural</button></a><br />
<a href="allcourse.php"> <button class=menubutton>Courses</button></a><br />
<a href="logout2.php"> <button class=menubutton>Logout</button></a><br />
</div>
<div class="allass">
<table border="1" class="table"><tr>
<td>S/N</td><td>MATRIC NO</td><td>COURSE CODE</td><td>ASSIGNMENT NO</td><td>DATE & TIME</td><td>STATUS</td>
<td>DOWNLOAD</td><td>ACTION</td></tr>
<?php
            session_start();
            $code=$_SESSION['coursecode'];
          	include('connect.php');
            $sel = "SELECT * FROM assignment";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
    echo"<tr><td>".$f4['id']."</td><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['assno']."</td>
	<td>".$f4['time']."</td><td>".$f4['status']."</td><td><a href=$f4[file]><img src=image/download.jpg></a></td>
	<td><a href=deleteass.php?details=$f4[id] onclick=\"return confirm('YOU MEAN TO DELETE')\";><img src=image/decline.jpg></td></tr>";
    $sel2=$sel2-1;
            }
        ?>
</table>
<script>
function ConfirmDelete(){
var i = confirm("YOU MEAN TO DELETE???");
if (i) 
return true;
else
return false;
}
</script>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>