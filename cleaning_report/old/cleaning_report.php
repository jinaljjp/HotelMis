<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'maid'){
	
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
			<script src='undo.js' type="text/javascript"></script>

		

		<link rel="stylesheet" href="form.build.min.css">

		
		</head>
        
         <?php 

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
?> 
		<body class="" >
        <div id="head">
                    <!-- clock widget start -->
            <div style="float:right; margin-top:0px">
							 <script type="text/javascript">
                        function startTime()
                        {
                        var today=new Date()
                        var h=today.getHours()
                        var m=today.getMinutes()
                        var s=today.getSeconds()
                        var ap="AM";
                        
                        //to add AM or PM after time
                        
                        if(h>11) ap="PM";
                        if(h>12) h=h-12;
                        if(h==0) h=12;
                        
                        //to add a zero in front of numbers<10
                        
                        m=checkTime(m)
                        s=checkTime(s)
                        
                        document.getElementById('clock').innerHTML=h+":"+m+":"+s+" "+ap
                        t=setTimeout('startTime()', 500)
                        }
                        
                        function checkTime(i)
                        {
                        if (i<10)
                        { i="0" + i}
                        return i
                        }
                        
                        window.onload=startTime;
                        
                        </script>
                        
                        <div id="clock" style="font-size:35px;color:#F9FAFB; width:200px; height:40px"></div>
                        
                        </div>

            <h1 style="text-decoration:none">Cleaning Report</h1>
            
          </div>
		
		<ul id="navigation">
			
            <li><span class="active">Cleaning Report</span></li>
			
			<li><a href="add_info.php">Settings</a></li>
			<li style="padding-left:450px"> Hi <?php
				if($_SESSION['login_user']!="")
				{
					$sql1= "SELECT * FROM login WHERE ID='$user_check'";
					$result1=mysql_query($sql1,$conn);
					$row1 = mysql_fetch_array($result1);
					$firstname =$row1["first_name"];
					$lastname =$row1["last_name"];
					echo $firstname.'&nbsp;'. $lastname ;
					$e_id =$row1["email_id"];
					$ph_no =$row1["ph_no"];

					
				}
				?> </li>
            <li>| Date: <?php echo date("m/d/Y");?> </li>
            <li><a href="../logout.php">Log Out</a> </li>
            
		</ul>
        
        <div id="content" class="container_16 clearfix">
           <div class="grid_99" style="  width:33.33%" >
            <h2 style="margin-left:40%; border:none">Cleaning Report</h2>

 <?php
           $con=mysql_connect('localhost','root','');
			$db=mysql_select_db('workspace');
			$sql="SELECT * FROM  shift_report GROUP BY room_no ORDER BY LENGTH(room_no), room_no ASC";
			$result = mysql_query($sql,$con);
			echo '<table  style="margin-left:40%">
            <tr>
            			
                         <td><b><span id="room">Room No#</span></b></td>
						 <td ><b></b></td>
						
            </tr>';
			while($row=mysql_fetch_array($result)){
			$kd=$row['id'];
			$room=$row["room_no"];
			
			
			?>
            
            
            <tr>
           
                         <td class="room"> <?php  echo $room; ?></td>
                        <td ><a href="delete.php?id=<?php echo $kd; ?>" >Done</a></td>
  </tr>
				
			<?php
			}
			?>
				
 
</table>
</div>
<div class="grid_99" style="  width:33.33%" >
            <h2 style="margin-left:40%; border:none">Cleaned Room</h2>
<form method="post" id="form">
 <?php
           $con=mysql_connect('localhost','root','');
			$db=mysql_select_db('workspace');
			$sql="SELECT * FROM cleaning_report GROUP BY room_no ORDER BY LENGTH(room_no), room_no ASC";
			$result = mysql_query($sql,$con);
			
			echo '<table  style="margin-left:40%;   ">
            <tr>
            			<td><b>ID</b></td>
                         <td><b>Room No#</b></td>
                        
						
						
            </tr>';
			while($row=mysql_fetch_array($result)){
			$o_id=$row['id'];
			$room=$row["room_no"];
			
			?>
            
            
            <tr>
           
            			<td ><span id="o_id"><?php echo $o_id; ?></span></td>
                         <td><span id="room"><?php echo $room; ?></span></td>
                        
  </tr>
				
			<?php
			}
			?>
				
 
</table>
</form>

      </div> </div>
             </body></html>








<?php
/*$q = "SELECT * FROM room_list ";
$res1 = mysql_query($q, $conn);
while($r=mysql_fetch_array($res1)){
    $time = $r["time"];
}

$que = "SELECT  room_no FROM shift_report ";
$result = mysql_query($que,$conn);
$count = mysql_num_rows($result);
while($row1 = mysql_fetch_array($result)){
    $room = $row1['room_no'];
}

$i = $time * $count;
$req = ceil( (8 * 60) /$i);
$limit = floor((8*60)/$time);
*/
?>
