<?php
session_start();
$email=$_SESSION['email'];
if(!isset($_SESSION['email']))
{
	die('You Are Not Logged In...<br> You Will Be Redirected To login Page"<script>document.location.href="login.php?message=please login first "</script>');
}
?>
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
<script>
var mode="";
function update_mode(m)
{
mode=m;

}
function get_roll()
{
	var c_id=$('#courses').val();
	$.post("get_roll.php", {c_id: c_id}, function(result){
	var array = result.split(',');
    $("#seats").val(array[0]);
	$("#roll").val(array[2]);
	$("#fee").val(array[1]);
	
		});	
	
}
function PrintElem()
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body ><center>');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
	if(mode=="cash")
	{
		 mywindow.document.write('<p>Please Pay Your Fee At THE cOUNT</p>');
	}
	else
	{
		 mywindow.document.write('<p>Your Fees Has Been Paid Via Online Payment</p>');
	}
	var content=$("#slip").html();
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>
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
	
	
	<form action="admission.php" method="post"><center>
<h2> ADMISSION HERE </h2>
<?php

require "connect.php";

if (isset($_POST['submit'])) 
{
if(!empty($_POST['courses']) && !empty($_POST['roll']) && !empty($email))
{
	$c_id=$_POST['courses'];
	$roll=$_POST['roll'];
	$date="17-July-2017";
	$ins_student=mysql_query("INSERT INTO `students` VALUES('','$email','$c_id','$roll')");	
	$course_update=mysql_query("UPDATE `course` SET `seats`=seats-1,`series`=series+1 WHERE `courseid`='$c_id'");
	if($ins_student && $course_update)
	{
		echo "<h3>Your Admission is Done Successfully..Your Roll No : $roll<br>
		Please Pay Your Fee At the counter before <b>$date</b>
		</h3>";
		die("<script>document.location.href='admission.php'</script>");
	}
	else
	{
		echo "Error Getting Admission";
		
	}
	
}


}	
	

?>
<?php 
$reg_data=mysql_query("SELECT * FROM `register` WHERE `email`='$email'");	
$isstudent=mysql_query("SELECT * FROM `students` WHERE `email`='$email'");
$courses=mysql_query("SELECT * FROM `course` WHERE seats!=0");
if(mysql_num_rows($isstudent))
{
	echo "<div id='slip' >Your Admission Is Already Done<br><br>";
	echo "Email : <b>$email</b><br><br>";
	$reg=mysql_fetch_assoc($reg_data);
	echo "Name : <b>$reg[fname] $reg[lname] </b><br><br>";
	echo "Date Of Birth : <b>$reg[dob]</b><br><br>";
	$isstudent=mysql_query("SELECT * FROM `students` WHERE `email`='$email'");
	$row=mysql_fetch_assoc($isstudent);
	$stu_courses=mysql_query("SELECT * FROM `course` WHERE `courseid`='$row[cid]'");
	$row_stu_course=mysql_fetch_assoc($stu_courses);
	echo "Your Course : <b>$row_stu_course[course_name]</b><br><br>";
	echo "Course Fee : <b>$row_stu_course[fee]</b><br><br>";
	echo "Your Roll Number Is : <b>$row_stu_course[session]$row_stu_course[nick]$row[rollno]</b><br><br>
	</div>
	<input type='radio' name='mode' onclick='update_mode(\"cash\")' />Cash <input name='mode' onclick='update_mode(\"online\")' type='radio' />Pay Online<br><br>
	<a href='#' onclick='PrintElem()' >Print Your Recipt</a>";
}
else
{
	echo "Email : <b>$email</b><br><br>";
	echo "Courses : <select id='courses' name='courses' onchange='get_roll()'><option disabled selected>courses</option>";
	while($row=mysql_fetch_assoc($courses))
	{echo "<option value='$row[courseid]'>$row[course_name]</option>";}
	echo "</select><br><br>";
	echo "Session : <b>2017</b><br><br>";
	echo "View Courses :<a href='subject.php' target='_blank' >Click Here</a><br><br>";
	echo "Seats Available. : <input type='text' name='seats' id='seats' readonly /></b><br><br>";
	echo "Roll Number You Will Get : <input type='text' name='roll' id='roll' readonly /></b><br><br>";
	echo "Course Fee : <input type='text' name='fee' id='fee' readonly /></b><br><br>";
	$reg=mysql_fetch_assoc($reg_data);
	echo "Name : <b>$reg[fname] $reg[lname] </b><br><br>";
	echo "Date Of Birth : <b>$reg[dob]</b><br><br>";
	echo "<input type='submit' name='submit' value='Proceed To Take Admission'>";
		
}
echo "</form>"


?>

	
	
	
    </section>
  </div>
</div>
<?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
