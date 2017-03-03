<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];

date_default_timezone_set('America/Los_Angeles');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>My Project</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="../css/tabs.css" type="text/css" media="screen" charset="utf-8" />
        
      
 <script src="js/jquery.min.js"></script>
<script src="js/pair-select.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
function move_list_items_all(sourceid, destinationid)
	{
		$("#"+sourceid+" option").appendTo("#"+destinationid);
	}
</script>
 		
		<script type="text/javascript">
			glow.ready(function(){
				new glow.widgets.Sortable(
					'#content .grid_5, #content .grid_6',
						{
							draggableOptions : {
								handle : 'h2'
							}
						}
					);
				});
		</script>

	</head>

	<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
		
	?>
    


 	
	<body>
 
		
		<div id="head">
        <div style="float:right; margin-top:0px">
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

<!-- clock widget end -->
</div>
        	<h1 style="text-decoration:none">Maid Report</h1>
            
          </div>
		
		<ul id="navigation">
			<li><a href="dashboard.php">Daily Report</a></li>
			<li><a href="shift_report.php">Room Shift Report</a></li>
            <li><span class="active">Maid Report</span></li>
			<li><a href="add_info.php">Settings</a></li>
			<li style="padding-left:235px"> Hi <?php
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

<div id="dialog-form">
<div id="content" class="container_16 clearfix">
 <h2 align="center">Maid Report</h2>
      
			<div class="grid_9"   style="color:#000000;margin-left:230px" align="center">
  		
        	<strong>Required Housekeeper: </strong><?php
			$q = "SELECT * FROM room_list ";
			$res1 = mysql_query($q, $conn);
			while($r=mysql_fetch_array($res1)){
				$time = $r["time"];
			}
			
			$que = "SELECT * FROM shift_report ";
				$result = mysql_query($que,$conn);
				$count = mysql_num_rows($result);
				while($row1 = mysql_fetch_array($result)){
					$room = $row1['room_no'];
				}
				$i = $time * $count;
				$req = ceil( (8 * 60) /$i);
			$limit = floor((8*60)/$time);
			
            ?>
            <input type="text" style="width:20%; margin-bottom:10px" name="req_hk" value="<?php echo $req; ?>"/>
            </div>
           
            <div class="grid_99"   style="color:#000000; width:50%; margin-left:250px">
         <!--php wizard -->
         <style>
				#registration-step{margin:0;padding:0;}
				#registration-step li{list-style:none; float:left;padding:5px 10px;border-top:#EEE 1px solid;border-left:#EEE 1px solid;border-right:#EEE 1px solid;}
				#registration-step li.highlight{background-color:#EEE;}
				.demoInputBox{padding: 10px;border: #F0F0F0 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
				.registration-error{color:#FF0000; padding-left:15px;}
				.message {color: #00FF00;font-weight: bold;width: 100%;padding: 10;}
				.btnAction{background-color: #09F;border: 0;color: #FFF;cursor: pointer; }
		</style>
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
        <div class="message"><?php if(isset($message)) echo $message; ?></div>
        <ul id="registration-step">
<li id="account" class="highlight">Account</li>
<li id="password">Credentials</li>
<li id="general">General</li>
</ul>

<div id="account-field">
                        <select id="MasterSelectBox" name="MasterSelectBox" multiple size="6" style="min-width: 200px;float:left;" onchange="disabled_option()">
                         
            <?php
			 $cat=$_GET['cat'];
 	echo $cat;
 
			
				$query = "SELECT * FROM login where designation = 'maid'";
				$res = mysql_query($query,$conn);
				while($row = mysql_fetch_array($res)){
					$f_name = $row['first_name'];
					$l_name = $row['last_name'];
					$u_id = $row['user_id'];
					
					echo'<option value="'.$f_name .'&nbsp;'. $l_name.'" >'.$f_name .'&nbsp;'. $l_name.'</option>';
					
			}
			
			     ?>        
                    </select>
                    <div style="float:left;margin:10px;">
                        <button id="btnAdd" style="width:30px">></button><br>
                        <button id="btnRemove" style="width:30px"><</button><br/>
                   
                        <button id="moverightall" onclick="move_list_items_all('MasterSelectBox','PairedSelectBox');" style="width:30px">>></button><br>
						 <button id="moveleftall" style="width:30px" onclick="move_list_items_all('PairedSelectBox','MasterSelectBox');"><<</button>
                        </div>

<select id="PairedSelectBox" name="PairedSelectBox" multiple  size="6" style="min-width: 200px;float:left;"></select>
</div>
<div id="password-field" style="display:none;">
<label>Enter Password</label><span id="password-error" class="registration-error"></span>
<div><input type="password" name="password" id="user-password" class="demoInputBox" /></div>
</div>
<div id="general-field" style="display:none;">
</div>
<div style="float:inherit; margin-top:15px">
<input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none; align-content:center">
<input class="btnAction" type="button" name="next" id="next" value="Next" style=" align-content:center" >
<input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
</div>

 

                 </div> 
                     
             </div>
              
            </div>
          
            </div>
		</body>
</html>