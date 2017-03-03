<?php
/*session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'Desk Clerk'){
	header('Location:../index.php');
	session_destroy();
    		exit();
}*/
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
			<script src='insert.js' type="text/javascript"></script>
			
			<script src='complemantary.js' type="text/javascript"></script>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
 	      <script type="text/javascript">
						
						$(function() {
						
						var input= ""; //holds current input as a string
						var input1= ""; var input2= ""; var input3= ""; var input4= ""; var input5= ""; var input6= ""; var input7= "";
						
						$("#cash1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input.length > 0 ) {
								input = input.slice(0,input.length-1); //remove last digit
								$(this).val(formatNumber(input));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout"," input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input += key; //add actual digit to the input string
									$(this).val(formatNumber(input)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#visa1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input1.length > 0 ) {
								input1 = input1.slice(0,input1.length-1); //remove last digit
								$(this).val(formatNumber(input1));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input1 += key; //add actual digit to the input string
									$(this).val(formatNumber(input1)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#masters1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input2.length > 0 ) {
								input2 = input.slice(0,input2.length-1); //remove last digit
								$(this).val(formatNumber(input2));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input2 += key; //add actual digit to the input string
									$(this).val(formatNumber(input2)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#ame_ex1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input3.length > 0 ) {
								input3 = input3.slice(0,input3.length-1); //remove last digit
								$(this).val(formatNumber(input3));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input3 += key; //add actual digit to the input3 string
									$(this).val(formatNumber(input3)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#disc1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input4.length > 0 ) {
								input4 = input4.slice(0,input4.length-1); //remove last digit
								$(this).val(formatNumber(input4));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input4 += key; //add actual digit to the input4 string
									$(this).val(formatNumber(input4)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#cheque1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input5.length > 0 ) {
								input5 = input5.slice(0,input5.length-1); //remove last digit
								$(this).val(formatNumber(input5));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input5 += key; //add actual digit to the input5 string
									$(this).val(formatNumber(input5)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#expedia1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input6.length > 0 ) {
								input6 = input6.slice(0,input6.length-1); //remove last digit
								$(this).val(formatNumber(input6));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input6 += key; //add actual digit to the input6 string
									$(this).val(formatNumber(input6)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#other1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input7.length > 0 ) {
								input7 = input7.slice(0,input7.length-1); //remove last digit
								$(this).val(formatNumber(input7));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout","input",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input7 += key; //add actual digit to the input7 string
									$(this).val(formatNumber(input7)); //format input string and set the input box value to it
								}
								
							}
							return false;
							
						});
						
						function getKeyValue(keyCode) {
							if(keyCode > 57) { //also check for numpad keys
								keyCode -= 48;
							}
							if(keyCode >= 48 && keyCode <= 57) {
								return String.fromCharCode(keyCode);
							}
						}
						
						function formatNumber(input) {
							if(isNaN(parseFloat(input))) {
								return ""; //if the input is invalid just set the value to 0.00
							}
							var num = parseFloat(input);
							return (num / 100).toFixed(2); //move the decimal up to places return a X.00 format
						}
						
						
						
					});
						
						 	
							</script>
        
        
		<script type="text/javascript">
			function showTotal() {
				var cash = document.getElementById('cash1').value;
				var ame_ex =  document.getElementById('ame_ex1').value;
				var disc = document.getElementById('disc1').value;
				var visa =  document.getElementById('visa1').value;
				var master =  document.getElementById('masters1').value;
				var cheque =  document.getElementById('cheque1').value;
				var expedia = document.getElementById('expedia1').value;
				var other =  document.getElementById('other1').value;
				
				var total = parseFloat(cash) + parseFloat(ame_ex) + parseFloat(disc) + parseFloat(visa) + parseFloat(master) + parseFloat(cheque) + parseFloat(expedia) + parseFloat(other);

				document.getElementById('total1').value = total.toFixed(2);
			}
		</script>
		<script type="text/javascript">
			glow.ready(function(){
				new glow.widgets.Sortable('#content .grid_5, #content .grid_6',
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
        
		<?php
			require_once("dbcontroller.php");
			$db_handle = new DBController();
			$comments = $db_handle->runQuery("SELECT * FROM complementary_room");
		?>
		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
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

        	<h1 style="text-decoration:none">Daily Report</h1>
            
          </div>
		
		<ul id="navigation">
			<li><span class="active">Daily Report</span></li>
            <li><a href="shift_report.php">Room Shift Report</a></li>
            <li><a href="maid_report.php">Maid Report</a></li>
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

		<div id="content" class="container_16 clearfix">
			<div class="grid_5">
				<div class="box">
					<h2>Prepared By:</h2>
					<p><strong>Name :  </strong><?php echo $firstname.'&nbsp;'. $lastname ;?><br/>							                         
					<strong>Email ID : </strong><?php echo $e_id;?> <br/>
					<strong>Phone No : </strong><?php echo $ph_no;?><br/>
                    <strong>Date : </strong> <?php echo date("m/d/Y");?></p>
				</div>
				<div class="box" >
					<h2>Room Details</h2>
						<form method="post" id="myform2">
							<p style="padding-left:10px">
                            <?php
									$sql2="SELECT  * FROM shift_report";
									$result2=mysql_query($sql2,$conn);
									$i = 0;
									$j = 0;
									while($fetch = mysql_fetch_array($result2)){
										$id = $fetch['id'];
										
										if($id > 0){
											$count = count($fetch['id']);
										$i = $i+1;
										}
									}
									$query = "SELECT room_no, COUNT(*) as count FROM shift_report GROUP BY room_no HAVING COUNT(*) > 1";
									$res=mysql_query($query,$conn);	
									while($fetch1 = mysql_fetch_array($res)){
										$room = count($fetch1['room_no']);
										
										$j = $j+1;
									}
									$q_room= "UPDATE room SET rent = '$i', re_rent= '$j' ";
									$q_run = mysql_query($q_room,$conn);
									
									
						?>
                        <strong>Total Room:</strong> <input type="text" id="rent"  style="width:35%; margin-left:35px" value="50"  disabled="disabled"/> <br/>
								<strong>Room Rented:</strong> <input type="text" id="rent"  style="width:35%;margin-top:10px; margin-left:22px" value="<?php echo $i; ?>"  disabled="disabled"/> <br/>
                                
								<strong>Room Re-Rented:</strong><input type="text" id="re_rent" style="width:35%; margin-top:10px;margin-left:3px" value="<?php echo $j; ?>" disabled="disabled"  />
								
							</p>
						</form>
				</div>
				<div class="box">
					<h2>Other Details</h2>
						<p>
                        <strong>Out of order Room:</strong> 
						
						<?php
							$sql2="SELECT  * FROM out_of_order";
							$result2=mysql_query($sql2,$conn);
							$cnt = 0; 
							while($row2 = mysql_fetch_array($result2)){
								if($row2['out_of_order']== 'Yes'){
									$count = count($row2['out_of_order']);
									$cnt = $cnt+1;
								}
							}
						echo $cnt;
						?>
						</p>
                 </div>
                
                        						
					</div>
					
                						
                <div class="grid_6">
					<div class="box">
						<h2>Quick Report</h2>
						<?php
						$total = 40;
						$occupancy="SELECT  * FROM room";
									$o_result2=mysql_query($occupancy,$conn);
									$fetch = mysql_fetch_array($o_result2);
									$i = $fetch['rent'];
										
										
									$o_total = $i/ $total;
									
										$o_insert = "UPDATE  occupancy  SET occupancy ='$o_total'";
										$run = mysql_query($o_insert,$conn);
									
					
						
						 ?>
						<p><strong>Occupancy:</strong><input type="text" id="rent"  style="width:35%; margin-left:72.5px" value="<?php echo $o_total; ?>"  disabled="disabled"/> <br/>
                        <?php
						
						$adr ="SELECT  * FROM room";
									$o_result=mysql_query($adr,$conn);
									$fetch = mysql_fetch_array($o_result);
									$rent1 = $fetch['rent'];
									$re_rent1 = $fetch['re_rent'];
									$total_rent = $rent1 + $re_rent1;
									
										$que ="select * from payment";
										$que_result1 = mysql_query($que,$conn);
									 	$row = mysql_fetch_array($que_result1);
										$total_pay = $row['total'];
										
									$adr_total = number_format($total_pay / $total_rent, 2);
									
										$adr_insert = "UPDATE  avg_daily_rate  SET avg_daily_rate ='$adr_total'";
									
										$run = mysql_query($adr_insert,$conn);
									
					
						
						 ?>
						<strong> Average Daily Rate:</strong> <input type="text" id="rent"  style="width:35%; margin-top:10px; margin-left:22px" value="<?php echo  $adr_total; ?>"  disabled="disabled"/></p>
					</div>
					<div class="box" style="margin-top:30px">
						<?php
									$sql2="SELECT  * FROM complementary_room";
									$result2=mysql_query($sql2,$conn);
									$i = 0;
									$j = 0;
									while($fetch = mysql_fetch_array($result2)){
										$id = $fetch['id'];
										
										if($id > 0){
											$count = count($fetch['id']);
										$i = $i+1;
										}
									}
									
									
						?>
						<h3>Complementary Room:
                        <input type="text"  style="width:25%; font-size:12px; margin-bottom:10px " value="<?php echo $i; ?>"  disabled="disabled"/></h3>	
					
                        
                        <div id="frmAdd">
							<p style="padding-left:5%" >
								<strong>Room #:</strong><input type="text" name="txtmessage" id="txtmessage"  style="width:34.5%; margin-left:25px"/><br />
								<strong>Comments:</strong><input type="text" name="txtmessage1" id="txtmessage1" style="width:35%; margin-left:5px; margin-top:10px"/>
								<input type="button" id="btnAddAction" name="submit" style="width:15%;margin-top:10px; margin-left:30% " onClick="callCrudAction('add','')" value="Add"/>
                            </p>
						</div>
						
						<script>
							function showEditBox(editobj,id) {
								$('#frmAdd').hide();
								$(editobj).prop('disabled','true');
								var currentMessage = $("#message_" + id + " .message-content").html();
								var editMarkUp = '<input type="text" style="width:30%" id="txtmessage_'+id+'"><input type="text" style="width:30%; margin-left= 5px" id="txtmessage1_'+id+'"><input type="button" value="Save" name="ok" style="width:30%; margin-top= 10px" onClick="callCrudAction(\'edit\','+id+')">';
								$("#message_" + id + " .message-content").html(editMarkUp);
							}
							function callCrudAction(action,id) {
								$("#loaderIcon").show();
								var queryString, queryString1;
								switch(action) {
									case "add":
										queryString = 'action='+action+'&txtmessage='+ $("#txtmessage").val();
										queryString1 = ''+'&txtmessage1='+ $("#txtmessage1").val();
									break;
									case "edit":
										queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
										queryString1 = ''+'&message_id='+ id + '&txtmessage1='+ $("#txtmessage1_"+id).val();
									break;
									case "delete":
										queryString = 'action='+action+'&message_id='+ id;
										queryString1 = ''+'&message_id='+ id;
									break;
								}
								jQuery.ajax({
									url: "crud_action.php",
									data: queryString + queryString1,
									type: "POST",
									success:function(data){
										switch(action) {
											case "add":
												$("#comment-list-box").append(data);
											break;
											case "edit":
												$("#message_" + id + " .message-content").html(data);
												$('#frmAdd').show();
												$("#message_"+id+" .btnEditAction").prop('disabled','');	
											break;
											case "delete":
												$('#message_'+id).fadeOut();
											break;
										}
										$("#txtmessage").val('');
										$("#txtmessage1").val('');
										$("#loaderIcon").hide();
									},
									error:function (){}
								});
							}
						</script>
						<div class="form_style">
							<div id="comment-list-box">
								<?php
									if(!empty($comments)) {
										foreach($comments as $k=>$v) {
								?>
								<div class="message-box" id="message_<?php echo $comments[$k]["id"];?>">

								<div class="message-content"><?php echo '<input type="text" style="width:15%" id="message_id" value="'.$comments[$k]["c_room"].'" disabled="disabled"/> '; echo '<input type="text" style="width:25%" id="message_id1" value="'.$comments[$k]["comments"].'" disabled="disabled"/>'; ?>

										<input type="button" value="Edit" style="width:20%;margin-top:10px " class="btnEditAction" name="edit" onClick="showEditBox(this,<?php echo $comments[$k]["id"]; ?>)"/>
<input type="button" value="Delete" style="width:23%;margin-top:10px" class="btnDeleteAction" name="delete" onClick="callCrudAction('delete',<?php echo $comments[$k]["id"]; ?>)"/>

									</div>
								</div>
							<?php
										}
									} 	
							?>
							</div>
							
						</div>
						
					</div>
				</div>
                   
				<div class="grid_5">
                   
                   <div class="box">
						<h2>Payment Method</h2>
                  		<form method="post" id="myform"  >
							<p>
                            	<strong>Cash:</strong> <input type="text" id="cash1"   /> <br/>
                       			<strong>Visa:</strong> <input type="text" id="visa1" />
                                <strong>Master Card:</strong> <input type="text" id="masters1"  />
                                <strong>American Express: </strong><input type="text" id="ame_ex1"  />
                        		<strong>Discovery:</strong> <input type="text" id="disc1"   />
                                <strong>Expedia:</strong> <input type="text" id="expedia1" />
                        		<strong>Cheque:</strong> <input type="text" id="cheque1" />
                        		<strong>Other:</strong><br /><input type="text" id="other1" >
                        		<br/>
                       			<strong>Total:</strong><input type="text" id="total1" name="total" disabled="disabled" />
                        
                        		<input type="button" id="add1" value="Add" style="width:30%;margin-top:10px" onclick="showTotal()">
							</p>

						</form>
					</div>
				</div>
			</div>
          
                
		</body>
</html>