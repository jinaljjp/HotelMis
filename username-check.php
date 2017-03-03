 <?php
	include 'db_connection.php';	
	$user_name 		= $dbConnection->real_escape_string($_POST['user_name']);
	$sqlUser='SELECT Username FROM login WHERE Username = "'.$user_name.'"';
	$resUser=$dbConnection->query($sqlUser);
	if($resUser === false) {
		trigger_error('Error: ' . $dbConnection->error, E_USER_ERROR);
	} else {
		echo $rows_returned = $resUser->num_rows;
	}
	
?>