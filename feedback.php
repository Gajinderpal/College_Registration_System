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
<center><h2><p id="p1">FEEDBACK </p></h2><br><br>

<input type ="email" placeholder="Enter E-mail" name="email"/><br>
<input type="int" placeholder="Enter phone Number " name="phone"/><br>
<p style ="marjin-right:12%:"> </p><textarea rows=10 cols=74 placeholder="Message"name="message"></textarea><br><br>
<input type ="submit" value="send" name="submit" class='button button2'/><br>
<input type ="reset" value="cancel" name="cancel" class='button button3'/>
</form>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
