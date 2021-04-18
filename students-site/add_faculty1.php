<!DOCTYPE html>
<?php
session_start();
$username=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
	die('You Are Not Logged In...<br> You Will Be Redirected To login Page"<script>document.location.href="admin_login.php?message=please login first "</script>');
}
?>
<html lang="en">
<head>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <?php require "includes/nav.php"; ?>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <?php require "includes/side.php"; ?>
  	  <form action="add_faculty1.php" method="POST">
<h2>Add Faculty</h2><br><br>
<?php
require "connect.php";
$dept=mysql_query("SELECT * from `dept`");
if(isset($_POST['submit']))
{
if(!empty($_POST['instid']) && !empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['dept']) && !empty($_POST['qual'])&& !empty($_POST['exp']))
{
$id=$_POST['instid'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$department=$_POST['dept'];
$qual=$_POST['qual'];
$exp=$_POST['exp'];
$result=mysql_query("INSERT INTO `instructor` VALUES('$id','$name','$gender','$email','$department','$qual','$exp')");
if(mysql_affected_rows()==1)
{
	echo "<h3 style='color:green;'>Faculty Member Added</h3>";
}
else
{
	echo "<h3 style='color:red;'>Error Adding Member</h3>";
}
}
else
{
echo "fill the form correctly<br><br>";
}

}
?>
<strong>Instructor ID:<input type="text" name="instid" placeholder="enter the id"/> &nbsp; <br><br>
Name:<input type="text" name="name" placeholder="entre the name here"/><br><br> 
Gender:<input type="text" name="gender" placeholder="M/F" /><br><br>
Email:<input type="email" name="email" placeholder="enter email" /><br><br>
Department:<select name="dept">
<option disabled selected>Select Department</option>
<?php
while($row=mysql_fetch_assoc($dept))
{
echo "<option value='$row[dept_id]'>$row[dept_name]</option>";
}
?>
</select><br><br>
Qualification:<input type="text" name="qual" placeholder="enter Qualification"><br><br>
Experience:<input type="text" name="exp" placeholder="enter Experience"><br><br>
<input type ="submit" value="submit" name="submit"/> &nbsp; &nbsp;
<input type="reset" value="clear" name="clear"/></strong>
</form>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
