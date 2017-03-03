<?php
session_start();
$u_id = $_SESSION['user_id'];
$bid=$_GET['id'];
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('workspace');
$sql="SELECT * FROM shift_report WHERE id = '$bid'";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result);
			$kd=$row['id'];
			$room=$row["room_no"];
			$cond = "cleaned";
			
				$insert = "INSERT INTO cleaning_report (id, room_no, date, time, condition, user_id) VALUES ('$bid', '$room', NOW(), NOW(), '$cond', '$u_id' )";
				$res =mysql_query($insert,$con); 

if($res==1){
	
echo "<script language='javascript' type='text/javascript'> document.location.href='cleaning_report.php';</script>";	
}
?>
 