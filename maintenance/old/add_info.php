<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'Maintenance'){
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
		<!--[if IE]><![if gte IE 6]><![endif]-->
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />

		<link rel="stylesheet" href="form.build.min.css">

		
		
		</head>
   <?php 

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');

?> 
<?php
if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$e_id = $_POST['e_id'];
		$ph_no = $_POST['ph_no'];
		
								$sql="UPDATE  login  SET Username ='$name', email_id = '$e_id', ph_no = '$ph_no' WHERE ID = '$user_check'";
								$result=mysql_query($sql,$conn);
								if($result==1){
									echo "<script language='javascript' type='text/javascript'>document.location.href='add_info.php';</script>";
								}
}
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

            <h1 style="text-decoration:none">Settings</h1>
            
          </div>
		
		<ul id="navigation">
			
            <li><a href="maintenance.php"> Maintenance </a></li>
			<li><span class="active">Settings</span></a></li>
            <li style="padding-left:490px"> Hi <?php
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
			<li>Date : <?php echo date("m/d/Y");?></li>
			<li><a href="../logout.php">Log Out</a> </li>    
		</ul>
            
		</ul>
        <form name="Order" action="" method="post" id="order"> 
     
			
			
            <div class="formcrafts form-live iframe-inactive  center-align  no-img" style="margin: 0; width: 100%;">
         

				

			<ul class="form-page clearfix ng-scope ui-sortable" id="sortable0" index="0" sortable=""><!-- ngRepeat: element in Page -->
         
           
                 <h2 style="margin-left:37%; border:none">Add Information</h2>

                  <form method="post" id="info_form">
                 <p style="width:20%; margin-left:35%"> 
                 <strong>Name:</strong><input type="text"  value="<?php echo $row1["Username"]; ?>" name="name" id="name" width="10%">
                  <strong>Email Id:</strong><input type="email" value="<?php echo $row1["email_id"]; ?>" name="e_id" id="e_id">
                  <strong>Phone No:</strong><input type="tel"  value="<?php echo $row1["ph_no"]; ?>" name="ph_no" id="ph_no">
                  <input type="submit" name="submit" value="Submit" style="margin-top:10px;margin-left:35%">
                  </p>
                  </form>
                       
                        </ul>
                     
                       
                        
                        </div><!--end ngRepeat: Page in FormElements.Main -->
                        
             </form>
			
                
 
              </body></html>