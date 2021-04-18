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
      <h1><a href="#">Student's </a></h1>
      <?php require "includes/nav.php"; ?>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
		  <?php 
		  @session_start();
		  if(isset($_SESSION['email']))
		  {
			  echo '<a href="logout.php">logout</a></div>';
		  }
		  else
		  {
			  echo '<a href="login.php">Login</a></div>';
		  }
		  ?>
            
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <?php require "includes/side.php"; ?>
    <section id="content">
      <div id="banner">
        <h2> <span> <span></span></span></h2>
      </div>
      <div class="inside">
        <h2>Recent <span>Articles</span></h2>
        <ul class="list">
          
          <li><span><img src="images/ficon.png" height=80px width=60%></span>
            <h4>About Staff </h4>
            <p>Our college is known for global leadership in education, and the faculty is composed of men and women who are world-class scholars. Faculty members are passionate and curious individuals who continue their own research while teaching at our college.They brings with them a diverse wealth of knowledge.</p>
          </li>
          <li class><span><img src="images/cicon.png" height=80px width=60%></span>
            <h4>About College</h4>
            <p>A gateway to academic and professional excellence, this multi-faculty College is famous for providing cutting edges to academic and co-academic skills through its commitment to innovative and student-friendly initiatives. The college has created an inimitable academic space for itself within nearly five decades of its monumental existence.</p>
          </li>
		  <li class="last"><span><img src="images/wicon.png" height=80px width=60%></span>
            <h4>About Portal</h4>
            <p>Our portal provides anytime and anywhere facility to the students.It is to Computerized Automated Student Admission System,to speed up and make it easy to use system.It will give the information to applicants to apply, when the online admission opens and closes.</p>
          </li>
        </ul>
        <h2>Principal's<span> Message </span></h2>
        <p>  Welcome to all learners to the <span class="txt1">Online Portal </span>  of our college,a premiere institution of the holy city Amritsar </p>
        <div class="img-box"><img src="images/picon.png" height=150px>
		<ul>
		<br><li>► Where sincere effort is made to offer a wide variety of subjects under various streams and programmmes to enable the students to decide what they wish to pursue according to their inclination and aptitude.</li> <br>
<li>► Where we are mindful of the fact that basic aim of education is to convert mind into a living fountain and not a reservoir of stagnant water. </li> </ul>
</div>
        <p class="p0"> The institution is committed to impart quality education at nominal cost to equip them with competency to tackle the competitive world because education is a companion which no misfortune can depress, no crime destroy,  no enemy alienate and above all no despotism enslave!!!!!<p>
      </div>
    </section>
  </div>
</div>
 <?php require "includes/footer.php"; ?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
