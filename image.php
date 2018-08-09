<?php
session_start();

include('connect.php');
$uploadDir = 'photo/'; //Image Upload Folder
			if(isset($_POST['update'])!=""){
  $fileName = $_FILES['image']['name'];
$tmpName  = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileType = $_FILES['image']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {$_SESSION['error']= "Error uploading file"; header('location:changestdimage.php');}
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
	$filePath = addslashes($filePath);
}

$update = "UPDATE student_reg SET image = '$filePath' WHERE matricno=$_SESSION[matric]";
$query = mysql_query($update) or die (mysql_error());
if (!$query){$_SESSION[error]="<<<PROFILE NOT UPDATED>>>"; header('location:changestdimage.php');}
else {$_SESSION[error]="<<<PROFILE SUCCESSFULLY UPDATED>>>"; header('location:stddashboard.php');}
}

?>