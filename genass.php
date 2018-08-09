<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NACOSS OGITECH</title>
<link href="genass.css" type="text/css" rel="stylesheet" />
<link rel="icon" type="icon" href="image/nac2.jpg" />
</head>
<body>
<?php include('header.php');?>
<div class="container">
<div class="image">
<img src="<?php  echo $_SESSION[image] ?> " width="150px" height="150px" />
</div>
<div class="calendar">
<a href="lecturalpage.php"> <button class=menubutton>Home</button></a> <br />
<a href="messagelec.php"> <button class=menubutton>Message</button></a><br />
<a href="staffprofile.php"> <button class=menubutton>Profile</button></a><br />
<a href="genass.php"> <button class=menuactive>View Assignment</button></a><br />
<a href="staffedit.php"> <button class=menubutton>Edit Profile</button></a><br />
<a href="logout1.php"> <button class=menubutton>Logout</button></a><br />
</div>

<div class="tab">
<button onfocus="message(event, 'ass1')" class="tablinks"> Number 1</button>
<button onclick="message(event, 'ass2')" class="tablinks"> Number 2</button>
<button onclick="message(event, 'ass3')" class="tablinks"> Number 3</button>
<button onclick="message(event, 'ass4')" class="tablinks"> Number 4</button>
<button onfocus="message(event, 'ass5')" class="tablinks"> Number 5</button>
<button onclick="message(event, 'ass6')" class="tablinks"> Number 6</button>
<button onclick="message(event, 'ass7')" class="tablinks"> Number 7</button>
<button onclick="message(event, 'ass8')" class="tablinks"> Number 8</button>
<button onclick="message(event, 'ass9')" class="tablinks"> Number 9</button>
<button onclick="message(event, 'ass10')" class="tablinks"> Number 10</button>
</div>


<!-- ASSIGNMENT ONE START-->
<div id="ass1" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 1' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
        $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT ONE END-->



<!-- ASSIGNMENT TWO START-->
<div id="ass2" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 2' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT TWO END-->


<!-- ASSIGNMENT THREE START-->
<div id="ass3" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 3' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT THREE END-->

<!-- ASSIGNMENT FOUR START-->
<div id="ass4" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 4' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT FOUR END-->


<!-- ASSIGNMENT FIVE START-->
<div id="ass5" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 5' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT FIVE END-->


<!-- ASSIGNMENT SIX START-->
<div id="ass6" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 6' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT SIX END-->

<!-- ASSIGNMENT SEVEN START-->
<div id="ass7" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 7' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT SEVEN END-->

<!-- ASSIGNMENT EIGHT START-->
<div id="ass8" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 8' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT EIGHT END-->


<!-- ASSIGNMENT NINE START-->
<div id="ass9" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 9' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT NINE END-->

<!-- ASSIGNMENT TEN START-->
<div id="ass10" class="tabcontent">
  <table border="1" class=table>
  <tr><td>MATRIC NO</td><td>COURSE CODE</td><td>DATE & TIME</td><td>ASSIGNMENT NO</td><td>DOWNLOAD</td><td>GRADE</td>
  <td>GRADE</td></tr>
<form method="POST" action="update.php">
        <?php
            session_start();
            $code=$_SESSION['coursecode'];
           mysql_connect("localhost","root","");
			mysql_select_db("submission");
            $sel = "SELECT * FROM assignment WHERE assno ='Assignment 10' AND coursecode = '$code' ";
                $sel1 = mysql_query($sel) or die(mysql_error());
            $sel2 = mysql_num_rows($sel1);
            while($sel2>0){
                $f4=mysql_fetch_array($sel1);
 echo"<tr><td>".$f4['matricno']."</td><td>".$f4['coursecode']."</td><td>".$f4['time']."</td><td class=font01>".$f4['assno']."</td>
<td><a href=$f4[file]><img src=image/dsmall.jpg></a></td><td>
<input type=text name=grade class=grade>
	<input type=hidden value=$f4[matricno] name= matric>
	<button>GRADE</button></td><td>".$f4['status']."</td></tr>";
    $sel2=$sel2-1;
            }
         $_SESSION['assno']=$f4['assno'];
        ?>
		</form>
		</td></tr></table>
  </td></tr></table>
</div>
<!-- ASSIGNMENT TEN END-->


</div>
<div class="footer"><?php include('footer.php');?></div>


<script>
function message(evt, type) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(type).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

 <script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
</body>
</html>
