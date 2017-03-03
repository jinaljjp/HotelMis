<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$action = $_POST["action"];
$txt = $_POST["txtmessage"];
$txt1 = $_POST["txtmessage1"];
if(!empty($action)) {
	
	switch($action) {
		case "add":
			$result = mysql_query("INSERT INTO  complementary_room(c_room,comments) VALUES('$txt','$txt1')");
			if($result){
				  $insert_id = mysql_insert_id();
				  echo '<div class="message-box"  id="message_' . $insert_id . '">
						<div class="message-content">
						<input type="text" style="width:15%" id="message_id" value="' . $_POST["txtmessage"] .'" disabled="disabled"/>
						<input type="text" style="width:25%" id="message_id1" value="'. $_POST["txtmessage1"].'" disabled="disabled"/>
						<input type="button" value="Edit" style="width:20%;margin-top:10px " class="btnEditAction" name="edit" onClick="showEditBox(this,' . $insert_id . ')"/>
						<input type="button" value="Delete" style="width:23%;margin-top:10px" class="btnDeleteAction" name="delete" onClick="callCrudAction(\'delete\',' . $insert_id . ')"/>
						</div>
						</div>';
			}
			break;
			
		case "edit":
			$result = mysql_query("UPDATE  complementary_room set c_room = '".$_POST["txtmessage"]."', comments = '".$_POST["txtmessage1"]."' WHERE  id=".$_POST["message_id"]);
			if($result){
				 $insert_id = mysql_insert_id();
				  echo '<div class="message-box"  id="message_' . $insert_id . '">
						<div class="message-content">
						<input type="text" style="width:15%" id="message_id" value="' . $_POST["txtmessage"] .'" disabled="disabled"/>
						<input type="text" style="width:25%" id="message_id1" value="'. $_POST["txtmessage1"].'" disabled="disabled"/>
						<input type="button" value="Edit" style="width:20%;margin-top:10px " class="btnEditAction" name="edit" onClick="showEditBox(this,' . $insert_id . ')"/>
						<input type="button" value="Delete" style="width:23%;margin-top:10px" class="btnDeleteAction" name="delete" onClick="callCrudAction(\'delete\',' . $insert_id . ')"/>
						</div>
						</div>';
				  
			}
			break;			
		
		case "delete":

			if(!empty($_POST["message_id"])) {
				mysql_query("DELETE FROM  complementary_room WHERE id = " .$_POST["message_id"]);
				
			}
			break;
	}
}
?>