<?php
//if admin logged in
if(isset($_SESSION['username']))
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

echo '<footer>
  <div class="footerlink">
   <p class="lf">Copyright &copy; 2017 <a href="#">Xavier Designers(9641,9643)</a> - All Rights Reserved</p>
   <p class="rf">Admin Access <a href="logout.php">LogOut</a></p><br>
    <p class="rf">Design by <a href="http://www.facebook.com/ajay4rajput/">Xavier Designers</a></p>
	<div style="clear:both;"></div>
  </div>
</footer>';
}
else
{

echo '<footer>
  <div class="footerlink">
   <p class="lf">Copyright &copy; 2017 <a href="#">Xavier Designers(9641,9643)</a> - All Rights Reserved</p>
   <p class="rf">Admin Access <a href="admin_login.php">LogIn</a></p><br>
    <p class="rf">Design by <a href="http://www.facebook.com/ajay4rajput/">Xavier Designers</a></p>
	<div style="clear:both;"></div>
  </div>
</footer>';
}


?>