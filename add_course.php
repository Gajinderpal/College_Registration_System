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
.button3 {
	background-color: #f44336;
	
}
	} 
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
    <section id="content">
	  <div class="rowElem">
<form action="add_course.php" method="post">
<center><h2> ADD COURSE </h2></center>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['cid']) && !empty($_POST['cname']) && !empty($_POST['dptid']) && !empty($_POST['seats']) && !empty($_POST['session']) && !empty($_POST['fee']) && !empty($_POST['series']))
{
$courseid=$_POST['cid'];
$coursename=$_POST['cname'];
$departmentid=$_POST['dptid'];
$totalseats=$_POST['seats'];
$session=$_POST['session'];
$fees=$_POST['fee'];
$series=$_POST['series'];
require "connect.php";
$result=mysql_query("INSERT INTO `course` VALUES('$courseid','$coursename','$departmentid','$totalseats','$session','$fees','$series')");

if(mysql_affected_rows()==1)
{
	echo "<h3 style='color:green;'>New Course Has Been Added
	</h3>";
}
else
{
	echo "<h3 style='color:red;'>Error : ".mysql_error($conn)." You Can Now Login <a href='login.php'>Here</a></h3>";
}
}
else
{
echo " fill the form correctly <br> <br>";
}

}
	

?>
<center><strong><input type="text" class="rowElem" name="cid" placeholder="Course ID" value="<?php echo @$_POST['cid'];?>" />  <br>
<input type="text" name="cname" placeholder="Course Name" value="<?php echo @$_POST['cname'];?>" /> <br>
<input type="text" name="dptid" placeholder="Department ID" value="<?php echo @$_POST['dptid'];?>" /> <br>
<input type="text" placeholder="Available Seats" name="seats"> <br>
<input type="text" placeholder="Session" name="session"><br>
<input type="text" placeholder="Course Fees" name="fee"> <br>
<input type="text" placeholder="RollNo Series" name="series"> <br><br>
<input type="submit" value="submit" name="submit"class='button button2'/> 
<input type="reset" value="clear" name="clear"class='button button3'/></strong></center>
</form>
</div>
    </section>
  </div>
</div>
<?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
