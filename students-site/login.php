<!DOCTYPE html>
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
      
    </div>
  </header>
  <div class="container">
    <?php require "includes/side.php"; ?>
    <section id="content">
      <body>
<center>
<h2>login form</h2>

<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
require "connect.php";
$result=mysql_query("select * FROM `register` WHERE email='$email' AND pwd='$password'");
if(mysql_num_rows($result))
{
	session_start();
	$user=mysql_fetch_assoc($result);
	echo "your are logged in as ".$user['fname']." ".$user['lname']."<br>";
	$_SESSION['email']=$user['email'];
	header("Location: http://localhost/students-site/admission.php");
}
else
{
	echo"invalid login!!";
}
}



?>


<form action="login.php" method="post">

<strong> Email   <input type="email" name="email" /> <br><br><br>
Password  <input type="password" name="password"  /> <br><br><br>
<input type="submit"  name="submit" value="login"> </strong>
</form>
</body>
</html>
    </section>
  </div>
</div>
<?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
