<?php
$bid=$_GET['id'];
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('workspace');
$sql1="DELETE FROM out_of_order WHERE Id = '$bid'";
$result1=mysql_query($sql1,$con);
echo "<script language='javascript' type='text/javascript'>document.location.href='maintenance.php';</script>";	

?>
 