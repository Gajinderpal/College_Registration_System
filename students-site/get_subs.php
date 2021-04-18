<?php
if(isset($_REQUEST['c_id']))
{
	require "connect.php";
	$c_id=$_REQUEST['c_id'];
	$rs1=mysql_query("SELECT * FROM `subjects` WHERE `course_id`='$c_id' ORDER BY `sub_id`");
	echo "<table><tr><th>Subjects</th></tr>";
	while($row=mysql_fetch_assoc($rs1))
	{
		echo $res="<tr><td>$row[subject]</td></tr>";
	}
	echo "</table>";
}

?>