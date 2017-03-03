<?php
session_start();
$user_check=$_SESSION['login_user'];
$u_id = $_SESSION['user_id'];
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
$c_id = $_POST['c_id'];
$c_r = $_POST['room'] ;
$c_a = $_POST['condition'];

$sql = "UPDATE cleaning_report SET room_no ='".$c_r."', room_condition = '".$c_a."', date = NOW(), time = NOW() WHERE id = '$c_id'";
$result = mysql_query($sql,$conn);
if($result == 1)
    echo "<script language='javascript' type='text/javascript'>document.location.href='maid_report.php';</script>";

?>