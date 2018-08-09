<?php
session_start();
$code = $_POST['coursecode'];
$title=$_POST['coursetitle'];
$unit=$_POST['courseunit'];
$semester=$_POST['semester'];
$level=$_POST['level'];
include('connect.php');
$select =" SELECT * FROM course_code WHERE coursecode= '$code'";
$query = mysql_query($select);
$num = mysql_num_rows($query);
if($num > 0){$_SESSION['error']="COURSE CODE ALREADY REGISTERED";header('location:addcoursecode.php');}
else{
$ins = "INSERT INTO course_code (coursecode, coursetitle, level, units, semester) VALUE
('$code', '$title', '$level', '$unit', '$semester') ";
$ins2= mysql_query($ins) or die(mysql_error());
if(!$ins2){$_SESSION['error']="NOT INSERTED"; header('location:addcoursecode.php');}
else{$_SESSION['error']="SUCCESSFULLY REGISTERED"; header('location:addcoursecode.php');}
}
?>