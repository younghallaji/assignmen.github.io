<?php
session_start();
$coursecode=$_POST['coursecode'];
$assno=$_POST['assno'];
$matric = $_SESSION['matric'];
mysql_connect("localhost","root","");
mysql_select_db("submission");
$select = " SELECT * FROM assignment WHERE assno = '$_POST[assno]' AND matricno = '$matric' AND coursecode = '$_POST[coursecode]' ";
	$select1 = mysql_query($select);
	$select2 = mysql_num_rows($select1);
	if($select2>0){$_SESSION['error']="ASSIGNMENT ALREADY SUBMITTED"; header('location:studentpage.php');}
		else{
			$uploadDir = 'assignment/'; //file Upload Folder
			if(isset($_POST['submit'])!=""){
  $fileName = $_FILES['assignment']['name'];
$tmpName  = $_FILES['assignment']['tmp_name'];
$fileSize = $_FILES['assignment']['size'];
$fileType = $_FILES['assignment']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {$_SESSION['error']= "Error uploading file"; header('location:studentpage.php');}
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
	$filePath = addslashes($filePath);
}

   $insert="INSERT INTO assignment (coursecode, file, assno, matricno)VALUES('$coursecode', '$filePath', '$assno', '$matric')";
			$query=mysql_query($insert) or die(mysql_error());
			if ($query){$_SESSION['error']="ASSIGNMENT SUBMITTED"; header('location:studentpage.php');}
			else { $_SESSION['error']="INVALID FORMAT"; header('location:studentpage.php');}
			       }
		}

?>