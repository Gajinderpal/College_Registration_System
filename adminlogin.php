<?php error_reporting(0);?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.s1{
background: #f5f5f5 none repeat scroll 0 0;
    border: 1px solid #464646;
    margin-bottom: 10px;
    outline: medium none;
    padding: 10px;
    
    width: 50%;
}
.sub1{
background: #313131 none repeat scroll 0 0;
    border: 1px solid #2e2e2e;
    color: #999999;
    cursor: pointer;
    display: inline-block;
    font-size: 0.8125em;
    font-weight: 400;
    margin-top: 4%;
    outline: medium none;
    padding: 10px 20px;
    
 
    transition: all 0.3s ease 0s;
    width: 10%;
}
.s1:hover{
background: #e5e5e5 none repeat scroll 0 0;
    border: 1px solid #464646;
}
.sub1:hover{
background: #e5e5e5 none repeat scroll 0 0;
    border: 1px solid #464646;
}
.img1{

border: 5px solid #464646;
border-radius:5px;
-webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.img1:hover{
-webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
border: 5px solid #E5E5E5;

 -webkit-transform: rotate(360deg) scale(2); 
 -moz-transform: rotate(360deg) scale(2); 
 -o-transform: rotate(360deg) scale(2); 
 -ms-transform: rotate(360deg) scale(2); 
 transform: rotate(360deg) scale(2);
}
</style>
<title>The Auto-Swift Website Template | About :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--start header-->
<div class="h_bg">
<div class="wrap">
<div class="wrapper">
<div class="header">
	<div class="logo">
		 <a href="index.html"><img src="images/logo.png"> </a>
	</div>
	<div class="cssmenu">
	<?php require "links.php" ?>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
</div>
<!-- start content -->
<div class="content_bg">
<div class="wrap">
<div class="wrapper" style="color:white;" >
<br><center >

<br>
<h3> Admin Login </h3>
<form class="search1" action="adminlogin.php" method="post"/>
<?php
if(!empty($_POST['submit']))
if(!empty($_POST['username']) && !empty($_POST['pass']))
{

$uname=$_POST['username'];
$pass=$_POST['pass'];
require "connect.php";
$q=mysql_query("select * from `admin` where `username`='$uname' and `password`='$pass'");
$num=mysql_num_rows($q);
if($num==1)
{
$row=mysql_fetch_assoc($q);
$uname=$row['username'];
echo "<h1>Hello Admin: You are logged in as $uname <br>You Will Be Redirected</h1><br>";
session_destroy();
session_start();
$_SESSION['ausername']=$row['username'];
echo "<script>document.location.href='addcar.php';</script>";

}
else
{
echo "<h1> invalid login </h1><br>";
}
}
else
{
echo "<h1> Enter data correctly </h1><br>";
}


?>
Username <input style="width:20%;" type="text" name="username"/><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Password &nbsp;&nbsp;&nbsp;<input style="width:20%;"type="password" name="pass"/><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="width:20%;" name="submit" type="submit" value="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input style="width:20%;" type="reset" value="clear"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</center>
<br><br><br><br><br><br><br><br><br>
	</div>
</div>
</div>
</div>
<div class="footer_bg" >
<div class="wrap">
<div class="wrapper">
<br>
	<div class="footer">
		<div class="copy">
			<p class="w3-link"><a href='addcar.php'>Administration<a></p>
		</div>
		<div class="f_nav">
		<ul>
			<li><a href="#">Skype</a></li>
			<li><a href="#">Linked in</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Facebook</a></li>
		</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
</body>
</html>