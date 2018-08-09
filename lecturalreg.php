<?php
session_start();
$fname=$_POST['firstname'];
$sname=$_POST['surname'];
$oname=$_POST['othername'];
$pnum=$_POST['phonenumber'];
$code=$_POST['coursecode'];
$email=$_POST['email'];
$title=$_POST['title'];
$level=$_POST['level'];
include('connect.php');
$select =" SELECT * FROM lectural_reg WHERE coursecode= '$code'";
$query = mysql_query($select);
$num = mysql_num_rows($query);
if($num > 0){$_SESSION['error']="COURSE CODE ALREADY REGISTERED";header('location:addlectural.php');}
else{
$ins = "INSERT INTO lectural_reg (firstname, surname, othername, phonenumber, coursecode, email, title, level) VALUE
('$fname', '$sname', '$oname', '$pnum', '$code', '$email', '$title', '$level') ";
$ins2= mysql_query($ins) or die(mysql_error());
if(!$ins2){$_SESSION['error']="NOT INSERTED"; header('location:addlectural.php');}
else{$_SESSION['error']="SUCCESSFULLY REGISTERED"; header('location:addlectural.php');}
}
?>
