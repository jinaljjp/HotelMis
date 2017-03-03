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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>My Project</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
			<script src='../manager/insert.js' type="text/javascript"></script>
			<script src='../manager/room.js' type="text/javascript"></script>
			<script src='../manager/complemantary.js' type="text/javascript"></script>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
 	
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
			require_once("../owner/dbcontroller.php");
			$db_handle = new DBController();
			$comments = $db_handle->runQuery("SELECT * FROM complementary_room");
		?>
		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

		<h1 id="head">Daily Report</h1>
		
		<ul id="navigation">
			<li><span class="active">Daily Report</span></li>
			<li><a href="../owner/maintenance.php">Maintenance</a></li>
            <li><a href="../owner/shift_report.php">Room Shift Report</a></li>
			<li><a href="../owner/add_info.php">Settings</a></li>
			<li style="padding-left:240px"> Hi <?php
				if($_SESSION['login_user']!="")
				{
					$sql1= "SELECT * FROM login WHERE ID='$user_check'";
					$result1=mysql_query($sql1,$conn);
					$row1 = mysql_fetch_array($result1);
					$firstname =$row1["first_name"];
					$lastname =$row1["last_name"];
					echo $firstname. $lastname;
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
					<p><strong>Name :  </strong><?php echo $firstname.'&nbsp;'. $lastname;?><br/>							                           
					<strong>Email ID : </strong><?php echo $e_id;?> <br/>
					<strong>Phone No : </strong><?php echo $ph_no;?></p>
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
									$q_room= "UPDATE room SET rent = '$i', re_rent= '$j'";
									$q_run = mysql_query($q_room,$conn);
									
						?>
								<strong>Room Rented:</strong> <input type="text" id="rent"  style="width:35%; margin-left:22px" value="<?php echo $i; ?>"  disabled="disabled"/> <br/>
                                
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
						<strong> Average Daily Rate:</strong> <input type="text" id="rent"  style="width:35%; margin-left:22px" value="<?php echo  $adr_total; ?>"  disabled="disabled"/></p>
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
						<h3>Complementary  Room:
                        <input type="text"  style="width:25%; font-size:12px; margin-bottom:10px " value="<?php echo $i; ?>"  disabled="disabled"/></h3>	
						<div class="form_style">
							<div id="comment-list-box">
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
                            <span><b>Room no #</b> </span><span><b> Comments</b></span>
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
                    <div class="box" >
						<h2>Payment Method</h2>
                  		<form id="myform">
							<p><?php
								$q ="select * from payment";
								 $result1 = mysql_query($q,$conn);
									 $row = mysql_fetch_array($result1);
									 $cash1 = $row["cash"];
									 $ame_ex1 = $row["ame_ex"];
									 $disc1= $row["discovery"];
									 $visa1 = $row["visa"];
									 $master1 = $row["master"];
									 $cheque1 = $row["cheque"];
									 $expedia1 = $row["expedia"];
									 $other1 = $row["other"];
									 $total = $cash1  + $ame_ex1 + $disc1 + $visa1 + $master1 + $cheque1 + $expedia1 + $other1;			
									 $sql1 = "UPDATE  payment  SET total ='$total'";
									 $result1 =  mysql_query($sql1,$conn);
									 
							?>
                            	<strong>Cash:</strong> <input type="text" disabled="disabled" id="cash1" value="<?php echo $cash1; ?>" name="cash12" />
                       			<strong>Visa:</strong> <input type="text" disabled="disabled" id="visa1" value="<?php echo $visa1; ?>" name="visa12"/>
                                <strong>Master Card:</strong> <input type="text" disabled="disabled" id="masters1" value="<?php echo $master1;  ?>" name="masters12"/>
                                <strong>American Express: </strong><input type="text" disabled="disabled" id="ame_ex1" value="<?php echo $ame_ex1;  ?>" name="ame_ex12"/>
                        		<strong>Discovery:</strong> <input type="text" disabled="disabled" id="disc1" value="<?php echo $disc1;  ?>" name="disc12"/>
                                <strong>Expedia:</strong> <input type="text" disabled="disabled" id="expedia12" value="<?php echo $expedia1; ?>" name="expedia1"/>
                        		<strong>Cheque:</strong> <input type="text" disabled="disabled" id="cheque1" name="cheque12" value="<?php echo $cheque1;  ?>"/>
                        		<strong>Other:</strong><br /><input type="text" disabled="disabled" id="other1" name="other12" value="<?php echo $other1;  ?>"/>
                        		<br/><strong>Total:</strong><input type="text" disabled="disabled" id="total1" style="border-color:#000000;border-width:1px" name="total" value="<?php echo $total;  ?>" />               
                        							
							</p>

						</form>
					</div>
				</div>
			</div>
          
                  
		</body>
</html>