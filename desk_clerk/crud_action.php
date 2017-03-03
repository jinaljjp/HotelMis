
<?php
session_start();
$user_check=$_SESSION['login_user'];
$u_id = $_SESSION['user_id'];
require_once("dbcontroller.php");
$db_handle = new DBController();
$u_id = $_SESSION['user_id'];
$action = $_POST["action"];
$txt = $_POST["txtmessage"];
$txt1 = $_POST["txtmessage1"];
$j = 0;
if(!empty($action)) {
	
	switch($action) {
		case "add":
			$result = mysql_query("INSERT INTO  shift_report(room_no,amount, type, comments, user_id,time, date) VALUES('$txt','0.00', 'complementary','$txt1','$u_id', NOW(),NOW())");
			if($result){
				  $insert_id = mysql_insert_id();
				  echo '<div class="message-box"  id="message_' . $insert_id . '">
						<div class="message-content">
						<input type="text" style="width:23%" id="message_id" value="' . $_POST["txtmessage"] .'" disabled="disabled"/>
						<input type="text" style="width:30%;margin-top:10px" id="message_id1" value="'. $_POST["txtmessage1"].'" disabled="disabled"/>
						<button type="button" id="c_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>
						</div>
						</div>';
			}
			break;
		
	}
}
?>