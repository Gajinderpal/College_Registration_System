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
<style>
.info
{
display:none;
background-color:rgba(243, 243, 243,0.5);
border-radius:1px;
color:rgba(148, 82, 34,0.9);

}
.img1{
cursor:pointer;
-webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
#img1{

border-radius:5px;
-webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.img1:hover{

-webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;


 -webkit-transform:scale(1.1); 
 -moz-transform:  scale(1.1); 
 -o-transform: scale(1.1); 
 -ms-transform: scale(1.1); 
 transform:  scale(1.1);
}
#t1 {
	margin:0px;padding:0px;
	width:100%;
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
	height:100%;
	margin:0px;padding:0px;
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
#t1 tr:nth-child(odd){ background-color:#ffaa56; }
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
</style>
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
	<h2>Faculty</h2>
	<?php
	require "connect.php";
	$result=mysql_query("SELECT * FROM `instructor`");
	while($row=mysql_fetch_assoc($result))
		{
		
			echo "<span class='img1' style='float:left;padding-left:40px;' onmouseover='show($row[instid])' onmouseout='hide($row[instid])'>
			<p class='info' id='$row[instid]' style='position:absolute;z-index:90;height:200px;width:200px;margin-left:9px;margin-top:9px;'>
			Name : $row[name]<br>
			Qualification : $row[qualification]<br>
			Experience :$row[exp]</p>
			<br><img src=images/default.png style='height:220px;width:220px;' />
			</span>";
		}
	
?>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> 
Cufon.now(); 
function show(n)
{
	$('#'+n).delay(1000);
    $('#'+n).css("display","inline");
	}
function hide(n)
{
$('#'+n).css("display","none");
}
</script>
<!-- END PAGE SOURCE -->
</body>
</html>
