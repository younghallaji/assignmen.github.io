<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="index2.css" type="text/css" />
<link href="tabcontrol2.css" rel="stylesheet" type="text/css" />
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
<a href="messageadmin.php"> <button class=menuactive>Message</button></a><br />
<a href="addlectural.php"> <button class=menubutton>Add Lectural</button></a><br />
<a href="addstudent.php"> <button class=menubutton>Add Student</button></a><br />
<a href="addcoursecode.php"> <button class=menubutton>Add Course Code</button></a><br />
<a href="allass.php"> <button class=menubutton>Assignment</button></a><br />
<a href="allstudent.php"> <button class=menubutton>Students</button></a><br />
<a href="alllectural.php"> <button class=menubutton>Lectural</button></a><br />
<a href="allcourse.php"> <button class=menubutton>Courses</button></a><br />
<a href="logout2.php"> <button class=menubutton>Logout</button></a><br />
</div>

<div class="tab">
<button onclick="message(event, 'lectural')" class="tablinks">Message Lectural</button>
<button onclick="message(event, 'inbox')" class="tablinks"> Inbox</button>
<button onclick="message(event, 'sentmessage')" class="tablinks"> Sent Message</button>
</div>

<!-- lectural message start-->

<form action="msglec.php" method="POST">
<div id="lectural" class="tabcontent">
<label>Select Reciever:</label><br />
<select name="reciever">
<?php 
session_start();
include('connect.php');
$sel="SELECT * FROM lectural_reg";
$sel2=mysql_query($sel);
$sel3=mysql_num_rows($sel2);
while($sel3>0){
$sel4=mysql_fetch_array($sel2);
echo"<option>$sel4[coursecode]</option>";
$sel3=$sel3-1;
}
       
?>
</select><br />
<label>Enter Text:</label><br />
<textarea cols="46" rows="10" placeholder="Enter Message" required name="message"></textarea><br /><br />
<center><input type="submit" class="submit1"  value="SEND MESSAGE"/></center>
</div>
</form>
<!--lectural MESSAGE ENDS-->


<!-- Inbox Message-->
<div id="inbox" class="tabcontent">
<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE reciever = '$_SESSION[username]'";
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


<!--sent message-->
<div id="sentmessage" class="tabcontent">

<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("submission");
$sel="SELECT * FROM message WHERE sender = '$_SESSION[username]'";
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

<!--sent message stop-->

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