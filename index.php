<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>User Icon Login Form Flat Responsive widget Template :: w3layouts</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="User Icon Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#username').keyup(function(){
		var user_name = $('#username').val();
		if(user_name.length >= 0) {
			$('#username_availability_result').html('Loading..');
			var post_string = 'user_name='+user_name;
			$.ajax({
				type : 'POST',
				data : post_string,
				url  : 'username-check.php',
				success: function(responseText){
					switch(user_name){
						case "jinalpatel":
						$('#username_availability_result').html('<span class="success"><img height="155" width="155" style="border-radius:50%" src="images/IMG_0192.jpg"/></span>');
						break;
						case "vishaldave":
						$('#username_availability_result').html('<span class="success"><img height="155" width="155" style="border-radius:50%" src="images/vishal.jpg"/></span>');
						break;
						default:
						$('#username_availability_result').html('<span class="success"><img height="155" width="155" style="border-radius:50%" src="images/Logo final.jpg"/></span>');
					}
					
				}
			});
		}else{
			$('#username_availability_result').html('');
		}
	});
});
</script>
</head>
 <?php 

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
if(isset($_POST['username'])){
	
 

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql="SELECT * FROM login WHERE Username='".$user."' and password='".$pass."' LIMIT 1";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$count=mysql_num_rows($result);
	$id=$row['ID'];
	$user_name = $row['Username'];
	$category = $row['designation'];
	$u_id = $row['user_id'];

if($count==1){
//session_register("Username");
//session_register("password");
$_SESSION['login_user']=$id;
$_SESSION['user_id']= $u_id;
$_SESSION['category']= $category;

		
	if($category == "Desk Clerk")
		echo "<script language='javascript' type='text/javascript'>document.location.href ='desk_clerk/dashboard.php';</script>";
	else if($category == "Manager")
		echo "<script language='javascript' type='text/javascript'>document.location.href='manager/dashboard.php';</script>";
	else if($category == "Maintenance")
		echo "<script language='javascript' type='text/javascript'>document.location.href='maintenance/maintenance.php';</script>";	
	else if($category == "owner")
		echo "<script language='javascript' type='text/javascript'>document.location.href='owner/dashboard.php';</script>";	
	else 
		echo "<script language='javascript' type='text/javascript'>document.location.href='cleaning_report/cleaning_report.php';</script>";
	} 
	
	else{
	echo "<script language='javascript' type='text/javascript'>alert('invalid username or password'); </script>";
	}
}

?> 
<body>
<div class="container">

     <div class="contact-form">
	 <div class="profile-pic">
	  <div class="username_availability_result" id="username_availability_result"></div>
	 </div>	 
	 <div class="signin">
     <form method="post">
         <div class='web'>
            
        
       
        </div>
	      <input type="text" name="username" id="username" class="user" value="Username" style="font-family:Helvetica" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" />
		  <input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
		 <!-- <p style="font-family:Helvetica"> <a href="#">Forgot Password?</a></p>	-->
     
	 </div>	 
	      <input type="submit" name="submit" value="Login" style="font-family:Helvetica"/>
	 </div>
     </form>
</div>

</body>
</html>