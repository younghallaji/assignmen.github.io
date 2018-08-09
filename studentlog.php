<?php
session_start();
session_register(error);
$matric = $_POST['matric'];
$pwd = $_POST['pwd'];
mysql_connect("localhost", "root", "");
mysql_select_db("submission");
$select="SELECT * FROM student_reg WHERE matricno = '$matric' AND password = '$pwd'";
$query = mysql_query ($select);
$num = mysql_num_rows ($query);
if ($num < 1){$_SESSION['error']=" INVALID LOGIN DETAILS"; header('location:index.php');}
else { 
$fetch = mysql_fetch_array($query);
$query2= mysql_query($fetch);
$_SESSION['surname']=$fetch['surname'];
$_SESSION['firstname']=$fetch['firstname'];
$_SESSION['othername']=$fetch['othername'];
$_SESSION['matric']=$fetch['matricno'];
$_SESSION['level']=$fetch['level'];
$_SESSION['password']=$fetch['password'];
$_SESSION['email']=$fetch['email'];
$_SESSION['image']=$fetch['image'];
header('location:stddashboard.php');
}
?>