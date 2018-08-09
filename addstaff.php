<?php
session_start();
session_register("error");
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$pnum=$_POST['pnum'];
$code=$_POST['coursecode'];
$email=$_POST['email'];
$title=$_POST['title'];
include ('connect.php');
$select = "SELECT * FROM staffreg WHERE coursecode = '$code'";
$select1 = mysql_query($select);
$select2 = mysql_num_rows($select1);
if($select2>0){$_SESSION['error']="COURSE CODE ALREADY EXIST";header('location:staffreg.php');}
	else{
	$insert = "INSERT INTO staffreg (firstname, surname, othername, phonenumber, coursecode, email, title) VALUE 
	('$fname', '$sname', '$oname', '$pnum', '$code', '$email', '$title')";
    $ins1 = mysql_query($insert) or die(mysql_error());
    if ($ins1){$_SESSION['error']="SUCCESSFULLY REGISTERED"; header("location:adminpage.php");header('location:staffreg.php');}
        else {
            $_SESSION['error']="NOT INSERTED";
        }
	}
?>