<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$user_check=$_SESSION['login_user'];
$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'Manager'){
	header('Location:../index.php');
	session_destroy();
	exit();
}
date_default_timezone_set('America/Los_Angeles');

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>ASE D Aves</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/lightbox.css">
	<!-- jQuery (necessary JavaScript plugins) -->
	<script src="js/bootstrap.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->

	<!--//theme style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Goaway Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- shift scripts-->
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
	<!-- shift scripts end-->
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

	<!-- start edit complementary -->

	<style>
		.login-dialog .modal-dialog {
			width: 100px;
		}
	</style>
	<script>

		$(window).load(function(){
			$('button').click(

				function() {
					var id = $(this).attr('id');

					var id1 = "_id";
					var id2 = "_room";
					var id3 = "_comments";
					var id4 = id.concat(id1);
					var id5 = id.concat(id2);
					var id6 = id.concat(id3);

					callfunction(id4,id5,id6);
				});
		});

		function callfunction(id,id1,id2){

			var id_val = document.getElementById(id).value;
			var room_no = document.getElementById(id1).value;
			var recipientname = document.getElementById('recipient-name');
			recipientname.value = room_no;
			var recipientid = document.getElementById('recipient-id');
			recipientid.value = id_val;
			//document.getElementById("edit_amount").value = document.getElementById(id2).value;

		}

		$('#exampleModal').on('show.bs.modal', function (event) {

			var button = $(event.relatedTarget) // Button that triggered the modal
			var id = $(event.relatedTarget).attr('id');

			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.



			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + recipient)
			modal.find('.modal-body input').val(recipient)
		})
		function callcrud(){

		}
	</script>
	<!--end-->
</head>
<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$comments = $db_handle->runQuery("SELECT * FROM shift_report");
?>

<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>

<body>
<!-- shift window start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">

		<script>

			function callcrudaction(){
				var room_no = document.getElementById('recipient-name').value;
				var room_id = document.getElementById('recipient-id').value;
				var amount = document.getElementById('message-text').value;
				var c_id =  '&c_id='+ $("#recipient-id").val();
				var room =  '&room='+ $("#recipient-name").val();
				var comments =  '&comments='+ $("#message-text").val();
				//alert(c_id + room);


				jQuery.ajax({
					url: "edit_comp.php",
					data: c_id + room + comments,
					type: "POST",
					success:function(data){

						document.location.href='dashboard.php';
					}
				});

			}
			function calldelete(id){
				var c_id =  '&c_id='+ $("#recipient-id").val();
				jQuery.ajax({
					url: "delete_comp.php",
					data: c_id,
					type: "POST",
					success:function(data){

						document.location.href='dashboard.php';
					}
				})};
		</script>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Edit Room</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Room No:</label>
						<input type="text" class="form-control" id="recipient-name">
						<input type="text" hidden="true" id="recipient-id">
					</div>
					<div class="form-group">
						<label for="message-text" class="control-label">comments:</label>
						<input type="text" class="form-control"  id="message-text" >
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onClick="callcrudaction()">Save</button>
				<button type="button" class="btn btn-primary" onClick="calldelete()">Delete</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>
		</div>
	</div>
</div>
<!-- shift window end -->

<!-- header -->
<div class="top-header">
	<div class="container">
		<div class="logo">
			<h1><span  aria-hidden="true" ><img src="../images/Logo Final.jpg" width="175" height="175"/></span></h1>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>

		<div style="float:right; margin-right:75px">
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

			<div id="clock" style="font-size:35px;color:#F9FAFB; width:210px; height:40px"></div>
		</div>


	</div>
</div>

<div class="top-menu">
	<div class="container">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/navbar header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="dashboard.php">Dashboard</a></li>
						<li><a href="shift_report.php">Shift report</a></li>
						<li><a href="maintenance.php">Maintenance</a> </li>
						<li><a href="maid_report.php">HouseKeeper</a></li>
						<li><a href="add_info.php">Setting</a></li>
						<li><a href="../logout.php">Logout</a></li>
					</ul>
				</div>
				<!--/navbar collapse-->
			</nav>
			<!--/navbar-->
		</div>

		<div class="clearfix"></div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	</div>
</div>
<div id="destination" class="destination">
	<div class="container">
		<div class="destintn-grids">
			<div class="col-md-4 desti-grid"  style="font-family: 'TitilliumWeb-Regular'; ">
				<div class="desti-info"  >

					<?php
					if($_SESSION['login_user']!="")
					{
						$sql1= "SELECT * FROM login WHERE ID='$user_check'";
						$result1=mysql_query($sql1,$conn);
						$row1 = mysql_fetch_array($result1);
						$firstname =$row1["first_name"];
						$lastname =$row1["last_name"];
						$e_id =$row1["email_id"];
						$ph_no =$row1["ph_no"];

					}
					?>
					&ensp;<h2 style="padding-top:10px">Welcome!</h2>
					<p>&ensp;<strong>Name:</strong>&ensp;&ensp;&ensp;&ensp; <?php echo $firstname.'&nbsp;'. $lastname ;?><br/>
						&ensp;<strong>Email ID: </strong>&ensp;&ensp;<?php echo $e_id;?> <br/>
						&ensp;<strong>Phone No:</strong>&ensp;<?php echo $ph_no;?><br/>
						&ensp;<strong>Date:</strong>&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo date("m/d/Y");?></p>

				</div>



				<!-- quick report start-->
				<div class="desti-info"  style="margin-top:10px">
					&ensp;<h2 style="padding-top:10px; color:#facc43">Quick Report:</h2>
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
					<p> <table style="color:#999"><tr><td>&ensp;<strong> Occupancy:</strong></td><td><input type="text" id="rent"  style="width:35%;margin-top:10px" value="<?php echo $o_total; ?>"  disabled="disabled"/> </td></tr>
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
						<tr><td>&ensp;<strong> Average Daily Rate:</strong></td><td> <input type="text" id="rent"  style="width:35%; margin-top:10px;margin-bottom:10px" value="<?php echo  $adr_total; ?>"  disabled="disabled"/></td></tr></table></p>
				</div>
			</div>
			<!-- quick report end-->




			<div class="col-md-4 desti-grid">


				<!-- room detail start-->
				<div class="desti-info" style="font-weight:bold; ">
					&ensp;<h2 style="color:#35b579; padding-top:10px">Room Details:</h2>
					<form method="post" id="myform2">
						<p>
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
						<table style="color:#999">
							<tr><td>&ensp;<strong>Total Room:</strong></td><td> <input type="text" id="rent"  style="width:35%;margin-top:10px" value="50"  disabled="disabled"/></td></tr>
							<tr><td>&ensp;<strong>Room Rented:</strong></td><td><input type="text" id="rent"  style="width:35%;margin-top:10px;" value="<?php echo $i; ?>"  disabled="disabled"/></td></tr>

							<tr><td> &ensp;<strong>Room Re-Rented:</strong></td><td><input type="text" id="re_rent" style="width:35%; margin-top:10px;" value="<?php echo $j; ?>" disabled="disabled"  /></td></tr>
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

							?>
							<tr><td>&ensp;<strong>Out of order Room:</strong></td><td><input type="text" id="order" style="width:35%; margin-top:10px; margin-bottom:10px" value="<?php echo $cnt; ?>" disabled="disabled"  /></td></tr>

						</table>
						</p>
					</form>


				</div>
				<!-- room detail end-->




				<!-- complementary room start-->
				<?php
				$sql = "SELECT * FROM shift_report WHERE type = 'complementary'  ORDER BY LENGTH(room_no), room_no ASC";
				$res = mysql_query($sql, $conn);
				$count = mysql_num_rows($res);
				?>

				<div class="desti-info" style="margin-top:10px;padding-bottom:10px; margin-left:10px">

					&ensp;<h2 style="color:#8306A4; padding-top:10px;">Complemetary Room:</h2>&ensp;<input type="text"  style="width:25%; margin-bottom:10px " value="<?php echo $count; ?>"  disabled="disabled"/><br/>
					<div id="frmAdd" style=" margin-left:50px">
						<p style="padding-left:5%" >
							<strong>Room #:</strong><input type="text" name="txtmessage" id="txtmessage"  style="width:34.5%; margin-left:25px"/><br />
							<strong>Comments:</strong><input type="text" name="txtmessage1" id="txtmessage1" style="width:35%; margin-left:5.5px; margin-top:10px"/><br/>
							<input type="button" id="btnAddAction" name="submit" style="width:15%;margin-top:10px;margin-left:75px " onClick="callCrudAction('add','')" value="Add"/>
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
								/*case "edit":
									queryString = 'action='+action+'&message_id='+ id + '&txtmessage='+ $("#txtmessage_"+id).val();
									queryString1 = ''+'&message_id='+ id + '&txtmessage1='+ $("#txtmessage1_"+id).val();
									break;
								case "delete":
									queryString = 'action='+action+'&message_id='+ id;
									queryString1 = ''+'&message_id='+ id;
									break;*/
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
										/*case "edit":
											$("#message_" + id + " .message-content").html(data);
											$('#frmAdd').show();
											$("#message_"+id+" .btnEditAction").prop('disabled','');
											break;
										case "delete":
											$('#message_'+id).fadeOut();
											break;*/
									}
									$("#txtmessage").val('');
									$("#txtmessage1").val('');
									$("#loaderIcon").hide();
								},
								error:function (){}
							});
						}
					</script>
					<div class="form_style" style="margin-left:50px; margin-bottom:5px">
						<div id="comment-list-box">



							<?php
							$j = 0;
							while($row2 = mysql_fetch_array($res)){
								$id = $row2['id'];
								$room= $row2['room_no'];
								$comments = $row2['comments'];
								echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="c_'.$j.'_room" disabled="disabled"  
										style="width:23%;margin-top:10px" name="c_room" value="'.$room.'"/>
									   <input type="text" id="c_'.$j.'_comments" disabled="disabled" 
									   style="width:30%;margin-top:10px" name="c_amount" value="'.$comments.'"/>
									   <button type="button" id="c_'.$j.'" 
									   style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
									   Edit</button><br/>';
								$j = $j + 1;
							}
							?>

						</div>
					</div>
				</div><!-- complementary room end-->
			</div>



			<!-- payment start-->
			<div class="col-md-4 desti-grid">
				<div class="desti-info">
					&ensp;<h2 style="color:#4487f2;padding-top:10px">Payment Method:</h2>
					<form method="post" id="myform"  >
						<p>
							<?php
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
						<table style="color:#999; margin-top:10px">
							<tr><td  style="padding-bottom:10px">&ensp;<strong>Cash:</strong></td><td><input type="text" disabled="disabled" id="cash1" value="<?php echo $cash1; ?>" name="cash12" /></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Visa:</strong></td><td> <input type="text" disabled="disabled" id="visa1" value="<?php echo $visa1; ?>" name="visa12"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Master Card:</strong></td><td> <input type="text" disabled="disabled" id="masters1" value="<?php echo $master1;  ?>" name="masters12"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>American Express: </strong></td><td><input type="text" disabled="disabled" id="ame_ex1" value="<?php echo $ame_ex1;  ?>" name="ame_ex12"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Discovery:</strong></td><td> <input type="text" disabled="disabled" id="disc1" value="<?php echo $disc1;  ?>" name="disc12"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Expedia:</strong></td><td> <input type="text" disabled="disabled" id="expedia12" value="<?php echo $expedia1; ?>" name="expedia1"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Cheque:</strong> </td><td> <input type="text" disabled="disabled" id="cheque1" name="cheque12" value="<?php echo $cheque1;  ?>"/></td></tr>
							<tr><td style="padding-bottom:10px">&ensp;<strong>Other:</strong></td><td><input type="text" disabled="disabled" id="other1" name="other12" value="<?php echo $other1;  ?>"/></td></tr>

							<tr><td style="padding-top:20px">&ensp;<strong>Total:</strong></td><td  style="padding-top:20px;padding-bottom:10px"><input type="text" disabled="disabled" id="total1" style="border-color:#000000;border-width:1px" name="total" value="<?php echo $total;  ?>" /> </td></tr>


						</table>
						</p>

					</form>
				</div>
			</div>
			<!--payment end-->


			<div class="clearfix"></div>
		</div>

	</div>


	<!-- footer -->

	<div class="copywrite">
		<div class="container">
			<p> © 2015 Goaway. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>

	<!---->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!---->
	<!--/animatedcss-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!--/script-->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
	</script>
	<!--script-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 var defaults = {
			 containerID: 'toTop', // fading element id
			 containerHoverID: 'toTopHover', // fading element hover id
			 scrollSpeed: 1200,
			 easingType: 'linear'
			 };
			 */
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->
	<script src="js/responsiveslides.min.js"></script>

</body>
</html>