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
<center>
<input type="text" class="rowElem" name="fname" placeholder="First Name" value="<?php echo @$_POST['fname'];?>" /> <br>
<input type="text" name="lname" placeholder="Last Name" value="<?php echo @$_POST['lname'];?>" /> <br><br> </center>
<table align="center"> <tr> <td> <strong>Date Of Birth: &nbsp  </strong> </td>
<td><select name="date">
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
					  <option>year</option>
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
					  </select>  </td> </tr> 

<tr> <td> &nbsp;</td>
<td> &nbsp;</td> </tr>
<tr>
<td> <strong>Gender:</strong></td>
<td> <input type="radio" value="male"  name="gender"/> male<input type="radio" value="female" name="gender"/> female </td> </tr> </table>

<center> <input type="password" placeholder="Enter password" name="password"> <br>
<input type="password" placeholder="confirm password" name="cpassword"> <br>
 <input type="email" name="email" placeholder="Enter E-mail" value="<?php echo @$_POST['email'];?>"> <br>
 <input type="number" placeholder="Enter Contact no."  min="7000000000" max="9999999999" name="phone" value="<?php echo @$_POST['phone'];?>"> <br>
<textarea rows=5 placeholder="Enter Address" cols=53 name="address" ><?php echo @$_POST['address'];?></textarea> <br> <br> <br>
<input type="submit" value="submit" name="submit" class='button button2'/>
<input type="reset" value="clear" name="clear"/ class='button button3'></center>
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
