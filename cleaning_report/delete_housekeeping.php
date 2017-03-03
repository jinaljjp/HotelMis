<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
$c_id = $_POST['c_id'];


$sql = "DELETE  FROM cleaning_report  WHERE id = '$c_id'";
$result = mysql_query($sql,$conn);


?>