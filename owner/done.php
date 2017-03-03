<?php
$bid=$_GET['id'];
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('workspace');
$sql="SELECT * FROM out_of_order WHERE Id = '$bid'";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result);
			$kd=$row['Id'];
			$room=$row["room_no"];
			$order=$row["out_of_order"];
				if($order == "Yes"){
				$reason=$row["reason_order"];
				$comments=$row["comment_order"];
				}
				else{
				$reason=$row["reason"];
				$comments=$row["comments"];
				}
				$insert = "INSERT INTO maintenance (o_id, room_no, out_of_order, reason, comments) VALUES ('$kd','$room','$order','$reason','$comments')";
	$res =mysql_query($insert,$con); 

if($res==1){
	$sql1="DELETE FROM out_of_order WHERE Id = '$bid'";
$result1=mysql_query($sql1,$con);
echo "<script language='javascript' type='text/javascript'>document.location.href='maintenance.php';</script>";	
}
?>
 