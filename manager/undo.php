							
<?php
$bid=$_GET['id'];
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('workspace');
$sql="SELECT * FROM maintenance WHERE Id = '$bid'";
$result = mysql_query($sql,$con);
$row = mysql_fetch_array($result);
			$kd=$row['o_id'];
			$room=$row["room_no"];
			$order=$row["out_of_order"];
			$reason=$row["reason"];
				$comments=$row["comments"];

				
				$insert = "INSERT INTO out_of_order (Id, room_no, out_of_order, reason_order, comment_order) VALUES ('$kd','$room','$order','$reason','$comments')";

				
	$res =mysql_query($insert,$con); 

if($res==1){
	$sql1="DELETE FROM maintenance WHERE Id = '$bid'";
	$result1=mysql_query($sql1,$con);
	echo "<script language='javascript' type='text/javascript'>document.location.href='maintenance.php';</script>";
}
?>
 