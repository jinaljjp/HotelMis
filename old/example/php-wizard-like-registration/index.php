<html>
<head>

<style>
#registration-step{margin:0;padding:0;}
#registration-step li{list-style:none; float:left;padding:5px 10px;border-top:#EEE 1px solid;border-left:#EEE 1px solid;border-right:#EEE 1px solid;}
#registration-step li.highlight{background-color:#EEE;}
#registration-form{clear:both;border:1px #EEE solid;padding:20px;}
.demoInputBox{padding: 10px;border: #F0F0F0 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.registration-error{color:#FF0000; padding-left:15px;}
.message {color: #00FF00;font-weight: bold;width: 100%;padding: 10;}
.btnAction{padding: 5px 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
</style>
<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
	?>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>

$(document).ready(function() {
	$("#next").click(function(){
		
			var current = $(".highlight");
			var next = $(".highlight").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".highlight").removeClass("highlight");
				next.addClass("highlight");
				if($(".highlight").attr("id") == $("li").last().attr("id")) {
					$("#next").hide();
					$("#finish").show();				
				}
			}
		
	});
	$("#back").click(function(){ 
		var current = $(".highlight");
		var prev = $(".highlight").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".highlight").removeClass("highlight");
			prev.addClass("highlight");
			if($(".highlight").attr("id") == $("li").first().attr("id")) {
				$("#back").hide();			
			}
		}
	});
});
</script>
</head>
<body>
<div class="message"><?php if(isset($message)) echo $message; ?></div>
<ul id="registration-step">
<li id="account" class="highlight">Account</li>
<li id="password">Credentials</li>
<li id="general">General</li>
</ul>
<form name="frmRegistration" id="registration-form" method="post">
<div id="account-field">
		 <?php
			$q = "SELECT * FROM room_list ";
			$res1 = mysql_query($q, $conn);
			while($r=mysql_fetch_array($res1)){
				$time = $r["time"];
			}
			
			$que = "SELECT DISTINCT room_no FROM shift_report ";
				$result = mysql_query($que,$conn);
				$count = mysql_num_rows($result);
				while($row1 = mysql_fetch_array($result)){
					$room = $row1['room_no'];
				}
				
				$i = $time * $count;
				$req = ceil( (8 * 60) /$i);
			$limit = floor((8*60)/$time);
			
            ?>
            <strong> Total Room: </strong> <input type="text" style="width:20%; margin-bottom:10px" disabled="disabled" name="room" value="<?php echo $count; ?>"/><br/>
             <strong>Required Housekeeper: </strong><input type="text" style="width:20%; margin-bottom:10px" disabled="disabled" name="req_hk" value="<?php echo $req; ?>"/><br/>
       <strong> Housekeeper: </strong><input type="text" style="width:50%; margin-bottom:10px"  name="maid" value=""/></br>
</div>
<div id="password-field" style="display:none;">
<label>Enter Password</label><span id="password-error" class="registration-error"></span>
<div><input type="password" name="password" id="user-password" class="demoInputBox" /></div>
<label>Re-enter Password</label><span id="confirm-password-error" class="registration-error"></span>
<div><input type="password" name="confirm-password" id="confirm-password" class="demoInputBox" /></div>
</div>
<div id="general-field" style="display:none;">
<label>Display Name</label>
<div><input type="text" name="display-name" id="display-name" class="demoInputBox"/></div>
<label>Gender</label>
<div>
<select name="gender" id="gender" class="demoInputBox">
<option value="female">Female</option>
<option value="male">Male</option>
</select></div>
</div>
<div>
<input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">
<input class="btnAction" type="button" name="next" id="next" value="Next" >
<input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
</div>
</form>
</body></html>