<?php
session_start();
include('connect.php');
$select="SELECT * FROM admin WHERE username = '$_POST[uname]' AND password = '$_POST[pass]' ";
$query = mysql_query ($select) or die(mysql_error());
$num = mysql_num_rows ($query);
if ($num < 1){$_SESSION['error']=" INVALID LOGIN DETAILS"; header('location:adminindex.php');}
else { 
$fetch = mysql_fetch_array($query);
$query2= mysql_query($fetch) ;
$_SESSION['username']=$fetch['username'];
$_SESSION['password']=$fetch['password'];
header('location:adminpage.php');
}
?>
