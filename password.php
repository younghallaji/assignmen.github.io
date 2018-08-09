<?php
session_start();
include('connect.php');
$pass1 = $_POST['password1'];
$pass2 = $_POST['password2'];
$pass3 = $_POST['password3'];
$pass4 = $_POST['password4'];

$pass1 = mysql_real_escape_string($pass1);
$pass2 = mysql_real_escape_string($pass2);  
if ($pass1 <> $pass2 ) {$_SESSION['error']="INVALID OLD PASSWORD!!!"; header('location:changestdpass.php');}
else{
$pass3 = mysql_real_escape_string($pass3);
$pass4 = mysql_real_escape_string($pass4);
if($pass3 <> $pass4 ) {$_SESSION['error']="PASSWORD MISMATCH!!!"; header('location:changestdpass.php');}
else
{
$update = "UPDATE student_reg SET password ='$pass3' WHERE matricno = '$_SESSION[matric]'";
$query = mysql_query($update);
if($query){$_SESSION['error']="PASSWORD UPDATED!!!"; header('location:changestdpass.php');}
else{$_SESSION['error']="error!!!"; header('location:changestdpass.php');}

}
}
?>   