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
    <section id="content">
	  <div class="rowElem">
<form action="add_course.php" method="post">
<h2> ADD COURSE </h2>
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
<strong>Course ID :<input type="text" class="rowElem" name="cid" placeholder="Course ID" value="<?php echo @$_POST['cid'];?>" /> &nbsp; <br><br>
Course Name :<input type="text" name="cname" placeholder="Course Name" value="<?php echo @$_POST['cname'];?>" /> <br><br>
Department ID :<input type="text" name="dptid" placeholder="Department ID" value="<?php echo @$_POST['dptid'];?>" /> <br><br>
Seats : <input type="text" name="seats"> <br><br>
Session : <input type="text" name="session"><br><br>
Course Fees : <input type="text" name="fee"> <br><br>
Series : <input type="text" name="series"> <br><br>


<input type="submit" value="submit" name="submit"/> &nbsp; &nbsp;
<input type="reset" value="clear" name="clear"/></strong>
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
