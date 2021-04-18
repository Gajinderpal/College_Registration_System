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
    	<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
require "connect.php";
$result=mysql_query("INSERT INTO `feedback` VALUES('$email','$phone','$message')");
if($result)
{
   session_destroy();
   session_start();

   //print_r($user);
   
   echo "<h2>feedback successfuly submit</h2>";
   
}
else
{
   echo" <h2>feedback not submit</h2>";
   }
   
}
?>
<form action="feedback.php" method="post">
<center><h1><p id="p1">FEEDBACK </p></h1><br><br>

<i>E mail:<input type ="email" name="email"/><br><br>
Phone: <input typr="int" name="phone"/><br><br>
<p style ="marjin-right:12%:"> Message:</p><textarea rows=10 cols=40 name="message"></textarea><br><br></i>
<input type ="submit" value="send" name="submit"/> &nbsp; &nbsp;
<input type ="reset" value="cancel" name="cancel"/>
</form>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
