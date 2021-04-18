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
#t1 {
	margin:25px;
	padding:0px;
	margin-left:320px;
	left:100%; 	
	width:50%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;

	
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}#t1 table{
    border-collapse: collapse;
    border-spacing: 0;
	width:100%;
	height:80%;
	margin:0px;
	padding:0px;

}#t1 tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
#t1 table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
#t1 table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}#t1 tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}
#t1 tr:hover td{
	
}
#t1 tr:nth-child(odd){ background-color:#008cc4; }
#t1 tr:nth-child(even)    { background-color:#ffffff; }#t1 td{
	vertical-align:middle;
	
	
	border:1px solid #000000;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
	
}#t1 tr:last-child td{
	border-width:0px 1px 0px 0px;
}#t1 tr td:last-child{
	border-width:0px 0px 1px 0px;
}#t1 tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
#t1 tr:first-child td{
		background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
	border:0px solid #000000;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
	
}
#t1 tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
	background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

	background-color:#ff7f00;
}
#t1 tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
#t1 tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.button1{
	 appearance:button; /* For Good Browsers */
     -moz-appearance:button; /* For Firefox */
     -webkit-appearance:button; /* For Safari and Chrome */

     padding: 5px 15px; 
     color: #000;
     text-decoration: none;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button1:hover {
    background-color: #008cc4; /* Green */
    color: white;
}
</style>
<script>
function get_subs()
{
	var c_id=$('#courses').val();
	$.post("get_subs.php", {c_id: c_id}, function(result){
	$('#t1').hide();
	$('#t1').html(result);
	$('#t1').show(1000);
	});	
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
	require "connect.php";
	$course=mysql_query("SELECT * FROM `course`");
	?>
    <center>Courses : <select id='courses' name='courses' onchange='get_subs()'>
	
	<option disabled selected>Select A Course</option>"
	<?php
	while($row=mysql_fetch_assoc($course))
	{echo "<option value='$row[courseid]'>$row[course_name]</option>";}
	?>
	</select>
	<br>
	<div id="t1"></div>
		 <a href="admission.php" class="button1">Back To Admission</a>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
