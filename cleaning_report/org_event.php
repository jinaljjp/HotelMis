<?php
session_start();
$user_check=$_SESSION['login_user'];
if(!session_is_registered(username)){
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Business Directory</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/profile.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
   mysql_select_db("business_directory",$con);
	if($_POST['submit'])
	{
	   
	   $ename=$_POST['eventname'];
	   $sdate=$_POST['startdate'];
	   $edate=$_POST['enddate'];
	   $dec=$_POST['dec'];
	   
   $sql="insert into event(org_id,event_name,event_startdate,event_enddate,description) values('$user_check','$ename','$sdate','$edate','$dec') ";
	$result=mysql_query($sql,$con);
  if($result==1)
  {
   echo "<script language='javascript' type='text/javascript'>document.location.href='org_profile.php';</script>";
  } 
}
   ?>

<div class="main-out">
<div class="main">
<div class="page">
<div class="top">
<div class="header">
<div class="header-top">
<h1>Online <span>Business Directory</span></h1>

</div>
<div class="topmenu">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about_us.php">About&nbsp;Us</a></li>
  <li><a href="org_search.php">Search</a></li>
  <li><a href="view_event.php">Events</a></li>
  <li><a href="org_registration.php">Registration</a></li>
  <li><a href="contact.php">Contact &nbsp;Us</a></li>
  <li><a href="faqs.php">FAQs</a></li>
</ul>
</div>
<div class="header-img">
<h2>Here you can know about each other</h2>

</div>
</div>

<div class="content">
	<div class="left_menu">
		<table border="1" width="210px">
		  <tr>
			<td><a href="org_profile.php">Profile</a></td>
		  </tr>
		  <tr>
			<td><a href="org_event.php">Events</a></td>
		  </tr>
		  <tr>
			<td><a href="org_advertisement.php">Advertisment</a></td>
		  </tr>
		  <tr>
			<td><a href="change_pass.php">Change Password</a></td>
		  </tr>
		  <tr>
			<td><a href="logout.php">LogOut</a></td>
		  </tr>
		</table>

	</div>
	<div class="right_content">
	
		<h2 style="color:#0b90d6; text-align:center;padding-bottom:20px;margin-top:50px">
			Add Event</h2>
			<div class="event" style="margin-top:10px">
		<form name="event" method="post" >
	<table width="50%" border="0" cellspacing="0" cellpadding="0" align="center" >
        <tr>
         <td style="margin-bottom:3px"><font color="#000000">Event Name</font></td>
         <td style="margin-bottom:3px">:</td>
         <td><input type="text" name="eventname" style="margin-bottom:3px" /></td>
        </tr>
		  <tr>
         <td style="margin-bottom:3px"><font color="#000000">Event StartDate</font></td>
         <td style="margin-bottom:3px">:</td>
         <td><input type="text"  name="startdate"  style="margin-bottom:3px" /></td>
        </tr>
		  <tr>
         <td style="margin-bottom:3px"><font color="#000000">Event Enddate</font></td>
         <td style="margin-bottom:3px">:</td>
         <td ><input type="text" name="enddate"  style="margin-bottom:3px"/></td>
        </tr>
		 <tr>
         <td style="margin-bottom:3px"><font color="#000000">Event Description</font></td>
         <td style="margin-bottom:3px">:</td>
         <td><textarea cols="17" rows="6" name="dec" style="margin-bottom:3px" ></textarea></td>
        </tr>
		 <tr>
         <td class="fon" style="padding-top:40px" align="right"><input type="submit" name="submit" value="Add" /></td>
         <td></td>
         <td></td>
        </tr>
	</table>
		</form>
		</div>

		
	</div>


</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
<div class="bottom" style="margin-left:175px">
<ul>
  <li style="border-left: medium none"><a href="index.php">Home</a></li>
  <li><a href="about_us.php">About&nbsp;Us</a></li>
  <li><a href="org_search.php">Search</a></li>
  <li><a href="view_event.php">Events</a></li>
  <li><a href="contact.php">Contact &nbsp;Us</a></li>
  <li><a href="faqs.php">FAQs</a></li>
</ul>
<p>Copyright &copy; 2013-2014. Designed by Navakar Infotech</p>
</div>
</div>
</div>
</div>
</body>
</html>
