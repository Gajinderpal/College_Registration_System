<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site | Contact Us</title>
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
<body id="page5">
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
      <div id="banner">
        <h2>Professional <span>Online Education <span>Since 1992</span></span></h2>
      </div>
      <div class="inside">
        <h2>Contact <span>Us</span></h2>
        <div class="address">
          <address>
          <strong>Pin Code:</strong>143006<br>
          <strong>Country:</strong>INDIA<br>
          <strong>Telephone:</strong>0183-2553377<br>
          <strong>E mail:</strong>davasr@yahoo.com
		  <strong>Website:</strong>www.davcollegeasr.org
          </address>
          <div class="extra-wrap">
            <h4> Info:</h4>
            <p>DAV COLLEGE ,
				Katra Sher Singh,
				I/S Hathi Gate,
				AMRITSAR.
				Punjab-143001</p>
          </div>
        </div>
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
		
        <h2>Feedback <span>Form</span></h2>
        <form id="contacts-form" action="contact-us.php">
          <fieldset>
            <div class="field">
             <label> Email:</label><input type ="email" name="email"/><br><br>
            </div>
			<div class="field">
             <label> Phone:</label><input type ="int" name="phone"/><br><br>
            </div>
            <div class="field extra">
              <label>Your Message:</label>
              <textarea cols="1" rows="1"></textarea>
            </div>
      <br><br>    <input type ="submit" value="send" name="submit"/> &nbsp; &nbsp;
			<input type ="reset" value="cancel" name="cancel"/>
          </fieldset>
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
