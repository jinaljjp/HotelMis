<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'owner'){
	header('Location:../index.php');
	session_destroy();
    		exit();
}
date_default_timezone_set('America/Los_Angeles');
?>
<!DOCTYPE html>
<!--[if gt IE 8]>
	<!--><html style="background-color: rgb(250, 250, 250); background-image: 'ng-app='FormCrafts"><!--<![endif]-->
	<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>My Project</title>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
			
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<!--<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />-->

		
  
  

		</head>
         <?php 

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
?> 
 
		<body class="" >
        <h1 id="head">Daily Report</h1>
		
		<ul id="navigation">
			<li><a href="dashboard.php">Daily Report</a></li>
			<li><span class="active">Maintenance</span></li>
            <li><a href="shift_report.php">Room Shift Report</a></li>
			<li><a href="add_info.php">Settings</a></li>
			<li style="padding-left:240px"> Hi <?php
				if($_SESSION['login_user']!="")
				{
					$sql1= "SELECT * FROM login WHERE ID='$user_check'";
					$result1=mysql_query($sql1,$conn);
					$row1 = mysql_fetch_array($result1);
					$firstname =$row1["first_name"];
					$lastname =$row1["last_name"];
					echo $firstname. $lastname;
					
				}
				?> </li>
            <li>| Date: <?php echo date("m/d/Y");?> </li>
            <li><a href="../logout.php">Log Out</a> </li>
            
		</ul>
 <div class="formcrafts form-live iframe-inactive  center-align  no-img" style="margin: 0; width: 100%;">
         

				

			<ul class="form-page clearfix ng-scope ui-sortable" id="sortable0">
            <h2 style="margin-left:40%; border:none">Maintenance Report</h2>

 <?php
           $con=mysql_connect('localhost','root','');
			$db=mysql_select_db('workspace');
			$sql="SELECT * FROM out_of_order";
			$result = mysql_query($sql,$con);
			echo '<table width="50%" style="margin-left:25%">
            <tr>
            			<td><b>ID</b></td>
                         <td><b>Room No#</b></td>
                         <td><b>Out of order?</b></td>
						<td ><b>Reason</b></td>
                        <td ><b>Comments</b></td>
						
            </tr>';
			while($row=mysql_fetch_array($result)){
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
			?>
            
            
            <tr>
           
            			<td ><?php echo $kd; ?></td>
                         <td><?php echo $room; ?></td>
                         <td ><?php echo  $order; ?></td>
                         <td><?php echo $reason; ?></td>
                        <td ><?php echo $comments; ?></td>
                         
  </tr>
				
			<?php
			}
			?>
				
 
</table>
</ul>

</div>
  <div class="formcrafts form-live iframe-inactive  center-align  no-img" style="margin: 0; width: 100%;">
         
<ul class="form-page clearfix ng-scope ui-sortable" id="sortable0">
            <h2 style="margin-left:46%; border:none">Solved</h2>
<form method="post" id="form">
 <?php
           $con=mysql_connect('localhost','root','');
			$db=mysql_select_db('workspace');
			$sql="SELECT * FROM maintenance";
			$result = mysql_query($sql,$con);
			echo '<table width="50%" style="margin-left:25%">
            <tr>
            			<td><b>ID</b></td>
                         <td><b>Room No#</b></td>
                         <td><b>Out of order?</b></td>
						<td ><b>Reason</b></td>
                        <td ><b>Comments</b></td>
						
						
            </tr>';
			while($row=mysql_fetch_array($result)){
			$o_id=$row['id'];
			$room=$row["room_no"];
			$order=$row["out_of_order"];
			$reason=$row["reason"];
			$comments=$row["comments"];
				
			?>
            
            
            <tr>
           
            			<td ><span id="o_id"><?php echo $o_id; ?></span></td>
                         <td><span id="room"><?php echo $room; ?></span></td>
                         <td ><span id="order"><?php echo  $order; ?></span></td>
                         <td><span id="reason"><?php echo $reason; ?></span></td>
                        <td ><span id="comments"><?php echo $comments; ?></span></td>
                          
                        
  </tr>
				
			<?php
			}
			?>
				
 
</table>
</form>
</ul>
</div>
        </body></html>