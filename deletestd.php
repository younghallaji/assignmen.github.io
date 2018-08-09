<?PHP
session_start();
//connecting to database
include('connect.php');
	$sql1="DELETE FROM student_reg WHERE id='$_GET[details]' ";
	$result1=mysql_query($sql1);
	if($result1){$_SESSION['error']="DELETED";header("location:allstudent.php");}
	
	?>