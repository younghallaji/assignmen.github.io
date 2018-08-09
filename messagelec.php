<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="index2.css" rel="stylesheet" type="text/css" />
<link href="tabcontrol2.css" rel="stylesheet" type="text/css" />
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
<a href="messagelec.php"> <button class=menuactive>Message</button></a><br />
<a href="staffprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="genass.php"> <button class=menubutton>View Assignment</button></a><br />
<a href="staffedit.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout2.php"> <button class=menubutton>Logout</button></a><br />
</div>

<div class="tab">
<button onfocus="message(event, 'student')" class="tablinks"> To Class</button>
<button onclick="message(event, 'lectural')" class="tablinks"> To Individual</button>
<button onclick="message(event, 'inbox')" class="tablinks"> Inbox</button>
<button onclick="message(event, 'sentmessage')" class="tablinks"> Sent Message</button>
<button onclick="message(event, 'adminmessage')" class="tablinks">Message Admin</button>

</div>


<!-- admin message start-->

<form action="adminmessage.php" method="POST">
<div id="adminmessage" class="tabcontent">
<label>Select Reciever:</label><br />
<select name="reciever">
<?php 
session_start();
$level= $_SESSION['level'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM admin";
$sel2=mysql_query($sel);
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"<option>$sel4[username]</option>";
$sel3=$sel3-1;
}
       
?>
</select><br />
<label>Enter Text:</label><br />
<textarea cols="46" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND MESSAGE"/></center>
</div>
</form>
<!--admin MESSAGE ENDS-->

<!-- class message start-->

<form action="genmessage.php" method="POST">
<div id="student" class="tabcontent">
<label>Select Reciever:</label><br />
<input type="text" name="reciever" value="<?php echo $_SESSION[level]?>" readonly/><br />
<label>Enter Text:</label><br />
<textarea cols="46" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND"/></center>
</div>
</form>
<!--CLASS  MESSAGE ENDS-->


<!--INDIVIDUAL MESSAGE STARTS-->

<form action="indmessage.php" method="POST">
<div id="lectural" class="tabcontent">
<label>Select Reciever:</label><br />
<select name="reciever">
<?php 
session_start();
$level= $_SESSION['level'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM student_reg WHERE level = '$level' ";
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
<textarea cols="46" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND MESSAGE"/></center>
</div>
</form>

<!--INDIVIDUAL MESSAGE ENDS-->


<!-- Inbox Message-->
<div id="inbox" class="tabcontent">
<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE reciever = '$_SESSION[surname]' OR reciever='$_SESSION[coursecode]'";
$sel2=mysql_query($sel) or die (mysql_error()) ;
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"$sel4[message]
&nbsp&nbsp&nbsp;<i>$sel4[sender]</i><br><br>";
$sel3=$sel3-1;
}              
?>
</div>

<!-- inbox stop-->

<div id="sentmessage" class="tabcontent">

<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE sender = '$_SESSION[coursecode]'";
$sel2=mysql_query($sel) or die (mysql_error()) ;
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"$sel4[message]
&nbsp&nbsp&nbsp;<i>$sel4[sender]</i><br><br>";
$sel3=$sel3-1;
}   
?>
</div>
<?php include('footer.php');?>


<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>

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
</body>
</html>