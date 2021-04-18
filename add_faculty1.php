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
<style>
input {
    width: 50%;
    padding: 5px 10px;
    margin: 8px 0;
    box-sizing: border-box;
}

.button {
    background-color: #008cc4; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	border: none;
    border-radius: 4px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3 {background-color: #f44336;} 




</style>

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
      
    </div>
  </header>
  <div class="container">
    <?php require "includes/side.php"; ?>
  	  <form action="add_faculty1.php" method="POST">
<center><h2>Add Faculty</h2></center><br>
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
<center>
<input type="text" name="instid" placeholder="Enter Instructor ID"/> <br>
<input type="text" name="name" placeholder="Enter name here"/><br
<input type="text" name="gender" placeholder="Gender: M/F" /><br>
<input type="email" name="email" placeholder="Enter E-mail" /><br>
<h3>Department:<h3><select name="dept">
<option disabled selected>Select Department</option>
<?php
while($row=mysql_fetch_assoc($dept))
{
echo "<option value='$row[dept_id]'>$row[dept_name]</option>";
}
?>
</select><br>
<input type="text" name="qual" placeholder="Enter Qualification"><br>
<input type="text" name="exp" placeholder="Enter Experience"><br><br>
<input type ="submit" value="Submit" name="submit" class='button button2'/>
<input type="reset" value="Clear " name="clear" class='button button3'/></center>
</form>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
