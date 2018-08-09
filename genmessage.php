<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("submission");
$insert = "INSERT INTO message (message, reciever, sender) VALUES ('$_POST[message]', '$_POST[reciever]', '$_SESSION[coursecode]')";
$query = mysql_query($insert) or die(mysql_error());
if(!$query){$_SESSION[error]="MESSAGE NOT SENT"; header('location:messagelec.php');}
else{
$_SESSION[error]="MESSAGE SENT"; header('location:messagelec.php');
}
?>