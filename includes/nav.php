<?php
@session_start();
//if user logged in
if(isset($_SESSION['email']))
{
	$log="logout";
	require"connect.php";
	$q=mysql_query("select * from register where email='$_SESSION[email]'");
			$num=mysql_num_rows($q);
			if($num==1)
			{
				$row1=mysql_fetch_assoc($q);
			}
			echo '<nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="register.php" class="m2">Register</a></li>
		  <li class="current"><a href="'.$log.'.php" class="m3">'.$log.' ('.@$row1['fname']. ')</a></li>
          <li><a href=feedback.php class="m4">Feedback</a></li>
		  <li class="last"><a href=contact-us.php class="m5">Contact Us</a></li>
        </ul>
      </nav>';

}
//if admin logged in
elseif(isset($_SESSION['username']))
{
$username=$_SESSION['username'];
$log="logout";
require "connect.php";
$q=mysql_query("select * from `admin` where username='$username'");
		$num=mysql_num_rows($q);
		if($num==1)
		{
		$row1=mysql_fetch_assoc($q);
		}
echo '<nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="register.php" class="m2">Reg</a></li>
          <li class="current"><a href="'.$log.'.php" class="m3">'.$log.' ('.@$row1['username']. ')</a></li>
          <li><a href="feedback.php" class="m4">Feedback</a></li>
          <li class="last"><a href=contact-us.php class="m5">Contact Us</a></li>
        </ul>
      </nav>';
}
//if no user logged in
else
{

echo '<nav>
        <ul>
          <li><a href="index.php" class="m1">Home Page</a></li>
          <li><a href="register.php" class="m2">Register</a></li>
          <li><a href="login.php" class="m3">Login</a></li>
		  <li><a href=feedback.php class="m4">Feedback</a></li>
          <li class="last"><a href=contact-us.php class="m5">Contact Us</a></li>
        </ul>
      </nav>';
}


?>