<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Username Availability check using php, mysqli and jQuery</title>
<script type="text/javascript" src="jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#user_name').keyup(function(){
		var user_name = $('#user_name').val();
		if(user_name.length > 2) {
			$('#username_availability_result').html('Loading..');
			var post_string = 'user_name='+user_name;
			$.ajax({
				type : 'POST',
				data : post_string,
				url  : 'username-check.php',
				success: function(responseText){
					if(responseText == 0){
						$('#username_availability_result').html('<span class="success"><img src="images/available.png"/></span>');
					}
					else if(responseText > 0){
						$('#username_availability_result').html('<span class="error"><img src="images/not-available.png"/></span>');
					}
					else{
						alert('Problem with mysql query');
					}
				}
			});
		}else{
			$('#username_availability_result').html('');
		}
	});
});
</script>
<style type="text/css">
.web{
	font-family:tahoma;
	size:12px;
	top:10%;
	border:1px solid #CDCDCD;
	border-radius:10px;
	padding:10px;
	width:45%;
	margin:auto;
	height:70px;
}
h1{
	margin:3px 0;
	font-size:13px;
	text-decoration:underline;
}
.tLink{
	font-family:tahoma;
	size:12px;
	padding-left:10px;
	text-align:center;
}
.success{
	color:#009900;
}
.error{
	color:#FF0000;
}
.talign_right{
	text-align:right;
}
.username_availability_result{
	display:block;
	width:auto;
	float:left;
	padding-left:10px;
}
.input{
	float:left;
}
</style>
</head>
<body>


<div class='web'>
		
	<div class='input'>Username: <input type="text" name="user_name" id="user_name" /></div>
	<div class="username_availability_result" id="username_availability_result"></div>
</div>
</body>
</html>