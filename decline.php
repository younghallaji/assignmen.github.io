<?PHP
session_start();
//connecting to database
mysql_connect("localhost","root","");
    mysql_select_db("submission");
$sql="SELECT * FROM assignment WHERE id=$_GET[details]";
$result=mysql_query($sql) or die (mysql_error());
$count=mysql_num_rows($result) ;
$row=mysql_fetch_array($result);
if($count < 0){$_SESSION['error']="not available";header("location:genass.php");}else{ 
	if($row[status] == 'pending'){
	$sql1="UPDATE assignment SET status='Declined' WHERE id='$_GET[details]' ";
	$result1=mysql_query($sql1);
	$_SESSION['error']="ASSIGNMENT SUCCESSFULLY DECLINED";
	header("location:genass.php");
	}
	else{$_SESSION['error']="ASSIGNMENT ALREADY REMARKED";
	header("location:genass.php");
	}
 }
?>