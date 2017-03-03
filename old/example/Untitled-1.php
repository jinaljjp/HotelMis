<!doctype html>
<html>
<head>
<style>
body{width:40%;}
.message-box{margin-bottom:20px;border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.btnDeleteAction{background-color: #F3C6C6;border: 0; padding: 7px; color: #555555; margin-bottom: 15px; font-family: Verdana,Arial,sans-serif;font-size: 1.1em;vertical-align: top;border-radius: 4px;}
#btnAddAction{background:#09F;border:0;color:#FFF;}
</style>
<?php
require_once("../../dbcontroller.php");
$db_handle = new DBController();
$comments = $db_handle->runQuery("SELECT * FROM shift_report");
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(document).ready(function() {
	var comment_id;
	var edit_window = $("#frmEdit").dialog({autoOpen: false,
      height: 280,
      width: 480,
      modal: true,
	  buttons: {
		"Post": addComment
	  },
	  close: function() {
		add_window.dialog( "close" );
	  }});
	  
	

	function addComment() {
		add_window.dialog( "close" );
		callCrudAction('add','');
	} 

	

	$( ".btnEditAction").button().on( "click", function() {
		openEditBox($(this).attr("id"));
	});
});

function openEditBox(id) {
	edit_window = $("#frmEdit").dialog({
      buttons: {
        "Edit": editComment
      },
      close: function() {
		
        edit_window.dialog( "close" );
      }
    });
	edit_window.dialog( "open" );
	comment_id = id;
	var message = $("#message_" + comment_id + " .message-content").html();
	var message1 = $("#message_" + comment_id + " .message-content1").html();
	$("#edit-message").val(message); 
	$("#edit-message1").val(message1); 
}

function editComment() {
	edit_window.dialog( "close" );
	callCrudAction('edit',comment_id);
} 

function callCrudAction(action,id) {
	$("#loaderIcon").show();
	var queryString,querystring1;
	//It is better to sanitise user input to avoid XSS attack and SQL injection
	switch(action) {
		
		case "edit":
			queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#edit-message").val();
			queryString1 = '&txtmessage1='+ $("#edit-message1").val();

		break;
		case "delete":
			queryString = 'action='+action+'&message_id='+ id;
		break;
	}	 
	jQuery.ajax({
	url: "crud_action.php",
	data: queryString + queryString1,
	type: "POST",
	success:function(data){
		switch(action) {
			
			case "edit":
				$("#message_" + id + " .message-content" + " .message-content1").html(data);
				

			break;
			case "delete":
				$('#message_'+id).fadeOut();
			break;
		}
		$("#edit-message").val('');
		$("#edit-message1").val('');
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}</script>
</HEAD>
<BODY>
<div class="form_style">
<div id="comment-list-box">
<?php
if(!empty($comments)) {
foreach($comments as $k=>$v) {
?>
<div class="message-box" id="message_<?php echo $comments[$k]["id"];?>">
<div>
<button class="btnEditAction" name="edit" id="<?php echo $comments[$k]["id"];?>">Edit</button>
<button class="btnDeleteAction" name="delete" onClick="callCrudAction('delete',<?php echo $comments[$k]["id"]; ?>)">Delete</button>
</div>
<div class="message-content"><?php echo $comments[$k]["room_no"];?></div>
<div class="message-content1"><?php echo $comments[$k]["amount"]; ?></div>
</div>
<?php
}
} ?>
</div>


<div id="frmEdit">
Room No:<input type="text" style="margin-left:5px" name="edit-message" id="edit-message" /><br/>
Amount:<input type="text" style="margin-left:15px"  name="edit-message1" id="edit-message1" /></div>
<img src="LoaderIcon.gif" id="loaderIcon" style="display:none" />
</div>
</BODY>
</HTML>
</html>