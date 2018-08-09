<?PHP
session_start();
//connecting to database
include('connect.php');
$sql1="UPDATE assignment SET status='$_POST[grade]'
 WHERE matricno='$_POST[matric]' AND coursecode='$_SESSION[coursecode]' AND assno = '$_SESSION[assno]'";
	$result1=mysql_query($sql1) or die(mysql_error());
	if($result1){$_SESSION['error']="ASSIGNMENT SUCCESSFULLY APPROVED";header("location:genass.php");}
	else{
		$_SESSION['error']="ASSIGNMENT NOT GRADE";
	header("location:genass.php");
	}
?>

