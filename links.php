<?php
@session_start();
// If User is logged In 
if(isset($_SESSION['email']))
{
$log="logout";
require "connect.php";
$q=mysql_query("select * from register_user where email='$_SESSION[email]'");
		$num=mysql_num_rows($q);
		if($num==1)
		{
		$row1=mysql_fetch_assoc($q);
		}
		
echo '<ul>
	   <li><a href="index.php"><span>Home</span></a></li>
	      <li  class="active"><a href="search.php"><span>Search Cars</span></a></li>
	   <li class="has-sub"><a href=""><span>Profile</span></a>
	      <ul>
	         <li class="has-sub"><a href="favourite.php"><span>Favourite Cars</span></a>
	            
	         </li>
	         <li class="has-sub"><a href="compare.php?cr_no=1"><span>Compare Cars </span></a>
	           
	         </li>
	      </ul>
	   </li>
	    <li class="last"><a href="'.$log.'.php"><span>'."$row1[fname] (".$log.')</span></a></li>
		
	   <li class="last"><a href="Feedback.php"><span>Feedback</span></a></li>
	 <div class="clear"></div>
	 </ul>';		
}
//If Admin Is Loggedin
elseif(isset($_SESSION['ausername']))
{
$ausername=$_SESSION['ausername'];
$log="logout";
require "connect.php";
$q=mysql_query("select * from `admin` where username='$ausername'");
		$num=mysql_num_rows($q);
		if($num==1)
		{
		$row1=mysql_fetch_assoc($q);
		}

echo '<ul>
	   <li><a href="index.php"><span>Home</span></a></li>
	      <li  class="active"><a href="search.php"><span>Search Cars</span></a></li>
	   <li class="has-sub"><a href=""><span>Profile</span></a>
	      <ul>
	         <li class="has-sub"><a href="favourite.php"><span>Favourite Cars</span></a>
	            
	         </li>
	         <li class="has-sub"><a href="compare.php?cr_no=1"><span>Compare Cars </span></a>
	           
	         </li>
	      </ul>
	   </li>
	    <li class="last"><a href="'.$log.'.php"><span>'."Admin $row1[username] (".$log.')</span></a></li>
		
	   <li class="last"><a href="Feedback.php"><span>Feedback</span></a></li>
	 <div class="clear"></div>
	 </ul>';



}
// If User is not loggedIn
else
{

echo '<ul>
	   <li><a href="index.php"><span>Home</span></a></li>
	      <li  class="active"><a href="search.php"><span>Search Cars</span></a></li>
	   <li class="has-sub"><a href=""><span>Profile</span></a>
	      <ul>
	         <li class="has-sub"><a href="favourite.php"><span>Favourite Cars</span></a>
	            
	         </li>
	         <li class="has-sub"><a href="compare.php?cr_no=1"><span>Compare Cars </span></a>
	           
	         </li>
	      </ul>
	   </li>
	    <li class="last"><a href="login.php"><span>Login Here</span></a></li>
		
	   <li class="last"><a href="Feedback.php"><span>Feedback</span></a></li>
	 <div class="clear"></div>
	 </ul>';




}

	 ?>