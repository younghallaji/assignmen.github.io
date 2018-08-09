<?php
session_start();
$surname = $_POST['sname'];
$pwd = $_POST['pwd'];
mysql_connect("localhost", "root", "");
mysql_select_db("submission");
$select="SELECT * FROM lectural_reg WHERE surname = '$surname' AND password = '$pwd'";
$query = mysql_query ($select);
$num = mysql_num_rows ($query);
if ($num < 1){$_SESSION['error']=" INVALID LOGIN DETAILS"; header('location:index.php');}
else { 
$fetch = mysql_fetch_array($query);
$query2= mysql_query($fetch) ;
$_SESSION['surname']=$fetch['surname'];
$_SESSION['password']=$fetch['password'];
$_SESSION['firstname']=$fetch['firstname'];
$_SESSION['othername']=$fetch['othername'];
$_SESSION['coursecode']=$fetch['coursecode'];
$_SESSION['image']=$fetch['image'];
$_SESSION['level']=$fetch['level'];
$_SESSION['email']=$fetch['email'];
$_SESSION['phonenumber']=$fetch['phonenumber'];
header('location:lecturalpage.php');
}
?>