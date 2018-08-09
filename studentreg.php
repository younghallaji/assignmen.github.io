<?php
session_start();
$fname=$_POST['firstname'];
$sname=$_POST['surname'];
$oname=$_POST['othername'];
$matric=$_POST['matric'];
$email=$_POST['email'];
$level=$_POST['level'];
include('connect.php');
$select =" SELECT * FROM student_reg WHERE matricno='$matric'";
$query = mysql_query($select);
$num = mysql_num_rows($query);
if($num > 0){$_SESSION['error']="MATRIC NUMBER ALREADY EXSIT";header('location:addstudent.php');}
else{
$ins = "INSERT INTO student_reg (firstname, surname, othername, matricno, email, level) VALUE
('$fname', '$sname', '$oname', '$matric', '$email', '$level') ";
$ins2= mysql_query($ins) or die(mysql_error());
if(!$ins2){$_SESSION['error']="NOT INSERTED"; header('location:addstudent.php');}
else{$_SESSION['error']="SUCCESSFULLY REGISTERED"; header('location:addstudent.php');}
}
?>