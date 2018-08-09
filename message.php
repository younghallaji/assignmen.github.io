<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index.css" rel="stylesheet" type="text/css" />
<link href="tabcontrol.css" rel="stylesheet" type="text/css" />
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
<a href="message.php"> <button class=menuactive>Message</button></a><br />
<a href="studentprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="subassignment.php"> <button class=menubutton>Submitted Assignment</button></a><br />
<a href="editprofile.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>
<!-- inbox start-->
<!-- inbox end-->
<div class="tab">
<button onfocus="message(event, 'studentmessage')" class="tablinks"> Students Inbox</button>
<button onclick="message(event, 'lecturalmessage')" class="tablinks">Lectural Inbox</button>
<button onfocus="message(event, 'student')" class="tablinks"> To Students</button>
<button onclick="message(event, 'lectural')" class="tablinks"> To Lectural</button>
<button onclick="message(event, 'sentmessage')" class="tablinks"> Sent Message</button>
</div>
<div id="studentmessage" class="tabcontent">
<?php 
session_start();
$matric= $_SESSION['matricno'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE reciever = '$_SESSION[matric]'";
$sel2=mysql_query($sel) or die (mysql_error()) ;
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"$sel4[message]&nbsp&nbsp&nbsp&nbsp&nbsp;$sel4[sender]</i><br><br>";
$sel3=$sel3-1;
}              
?>
</div>


<div id="lecturalmessage" class="tabcontent">
<?php 
session_start();
$matric= $_SESSION['matricno'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE reciever= '$_SESSION[level]' OR reciever = '$_SESSION[matric]'";
$sel2=mysql_query($sel) or die (mysql_error()) ;
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"$sel4[message]<i>&nbsp&nbsp&nbsp&nbsp&nbsp;$sel4[sender]</i><br><br>";
$sel3=$sel3-1;
}              
?>
</div>

<form action="stdmessage.php" method="POST">
<div id="student" class="tabcontent">
<label>Select Reciever:</label><br />
<select name="reciever">
<?php 
session_start();
$level= $_SESSION['level'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM student_reg WHERE level = '$level' AND matricno != '$_SESSION[matric]'";
$sel2=mysql_query($sel);
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"<option>$sel4[matricno]</option>";
$sel3=$sel3-1;
}
       
?>
</select><br />
<label>Enter Text:</label><br />
<textarea cols="50" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND"/></center>
</div>
</form>

<form action="lecturalmsg.php" method="POST">
<div id="lectural" class="tabcontent">
<label>Select Reciever:</label><br />
<select name="reciever">
<?php 
session_start();
$level= $_SESSION['level'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM lectural_reg WHERE level = '$level' ";
$sel2=mysql_query($sel);
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"<option>$sel4[surname]</option>";
$sel3=$sel3-1;
}
       
?>
</select><br />
<label>Enter Text:</label><br />
<textarea cols="50" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND MESSAGE"/></center>
</div>
</form>

<div id="sentmessage" class="tabcontent">
<?php 
session_start();
$matric= $_SESSION['matricno'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE sender = '$_SESSION[matric]'";
$sel2=mysql_query($sel) or die (mysql_error()) ;
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"$sel4[message]&nbsp&nbsp&nbsp&nbsp&nbsp;$sel4[sender]</i><br><br>";
$sel3=$sel3-1;
}              
?>
</div>


</div>


<div><?php include('footer.php');?></div>

<script>
function message(evt, type) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(type).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>