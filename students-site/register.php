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
    <section id="content">
      <center>
	  <div class="rowElem">
<form action="register.php" method="post">
<h2> REGISTER HERE </h2>
<?php
if(isset($_POST['submit']))
{
if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['date']) && !empty($_POST['month']) && !empty($_POST['year']) && !empty($_POST['gender']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']))
{
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$dob=$_POST['date']."-".$_POST['month']."-".$_POST['year'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$confirm_password=$_POST['cpassword'];
if($password!=$confirm_password)
{die("Password And Cpassword Should be Same");}
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
require "connect.php";
$result=mysql_query("INSERT INTO `register` VALUES('$firstname','$lastname','$dob','$gender','$email','$password','$address','$phone')");

if(mysql_affected_rows()==1)
{
	echo "<h3 style='color:green;'>Your Registeration is Done, You Can Now Login <a href='login.php'>Here</a></h3>";
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
First Name :<input type="text" class="rowElem" name="fname" placeholder="First Name" value="<?php echo @$_POST['fname'];?>" /> &nbsp; &nbsp;
Last Name :<input type="text" name="lname" placeholder="Last Name" value="<?php echo @$_POST['lname'];?>" /> <br> <br><br> <br>
Date Of Birth : <select name="date">
                      <option disabled selected>date</option>
					  <option> 1 </option>
					  <option> 2 </option>
					  <option> 3 </option>
					  <option> 4 </option>
					  <option> 5 </option>
					  <option> 6 </option>
					  <option> 7 </option>
					  <option> 8 </option>
					  <option> 9 </option>
					  <option> 10 </option>
					  <option> 11 </option>
					  <option> 12 </option>
					  <option> 13 </option>
					  <option> 14 </option>
					  <option> 15 </option>
					  <option> 16 </option>
					  <option> 17 </option>
					  <option> 18 </option>
					  <option> 19 </option>
					  <option> 20 </option>
					  <option> 21 </option>
					  <option> 22 </option>
					  <option> 23 </option>
					  <option> 24 </option>
					  <option> 25 </option>
					  <option> 26 </option>
					  <option> 27 </option>
					  <option> 28 </option>
					  <option> 29 </option>
					  <option> 30 </option>
					  <option> 31 </option>
					  </select>
					  <select name="month">
					  <option>month</option>
					  <option> 1 </option>
					  <option> 2 </option>
					  <option> 3 </option>
					  <option> 4 </option>
					  <option> 5 </option>
					  <option> 6 </option>
					  <option> 7 </option>
					  <option> 8 </option>
					  <option> 9 </option>
					  <option> 10 </option>
					  <option> 11 </option>
					  <option> 12 </option>
					  </select>
					  <select name="year">
					  <option> year</option>
					  <option>2017</option>
					  <option>2016</option>
					  <option>2015</option>
					  <option>2014</option>
					  <option>2013</option>
					  <option>2012</option>
					  <option>2011</option>
					  <option>2010</option>
					  <option>2009</option>
					  <option>2008</option>
					  <option>2007</option>
					  <option>2006</option>
					  <option>2005</option>
					  <option>2004</option>
					  <option>2003</option>
					  <option>2002</option>
					  <option>2001</option>
					  <option>2000</option>
					  <option>1999</option>
					  <option>1998</option>
					  <option>1997</option>
					  <option>1996</option>
					  <option>1995</option>
					  <option>1994</option>
					  <option>1993</option>
					  <option>1992</option>
					  <option>1991</option>
					  <option>1990</option>
					  <option>1989</option>
					  <option>1988</option>
					  <option>1987</option>
					  <option>1986</option>
					  <option>1985</option>
					  <option>1984</option>
					  <option>1983</option>
					  </select>
					  
	&nbsp; &nbsp;
Gender :  <input type="radio" value="male" name="gender"/> male
<input type="radio" value="female" name="gender"/> female <br><br><br> <br>
Select Password : <input type="password" name="password"> &nbsp; &nbsp;
Confirm Password : <input type="password" name="cpassword"> <br><br><br> <br>
E-mail : <input type="email" name="email" value="<?php echo @$_POST['email'];?>"> &nbsp &nbsp
Phone no . <input type="number"  min="7000000000" max="9999999999" name="phone" value="<?php echo @$_POST['phone'];?>"> <br> <br><br> <br>

Address : <textarea rows=5 cols=20 name="address"><?php echo @$_POST['address'];?></textarea> <br> <br><br> <br>

<input type="submit" value="submit" name="submit"/>
&nbsp; &nbsp;
<input type="reset" value="clear" name="clear"/>
</form>
</div>
</center>
    </section>
  </div>
</div>
<?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
