<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
	$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
						$zip = $_POST['zipValue'];
		echo "<script language='javascript' type='text/javascript'>alert(".$zip.");</script>";
		$query = "SELECT city, state_abbr FROM EasyDbsZipcodeLocations WHERE zip=".mysql_real_escape_string($zip);
$result=mysql_db_query($mysqldatabase, $query) or die(mysql_error());

//print out results
$row = mysql_fetch_array($result);
echo $row['city'].",".$row['state_abbr'];
?>
             

