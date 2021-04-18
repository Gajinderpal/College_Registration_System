<?php
if(isset($_REQUEST['c_id']))
{
	require "connect.php";
	$c_id=$_REQUEST['c_id'];
	$rs1=mysql_query("SELECT * FROM `course` WHERE `courseid`='$c_id'");
	while($row=mysql_fetch_assoc($rs1))
	{
		$res="$row[seats],$row[fee],$row[series]";
	}
	echo $res;
}

?>