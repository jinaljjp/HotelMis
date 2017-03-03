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
<html xmlns="http://www.w3.org/1999/html">
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

</head>

<?php
$conn=mysqli_connect('localhost','root','') or die(mysqli_errno());
$db=mysqli_select_db($conn, 'workspace') or die('Database doesnot exist');
?>


<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>
<!-- php wizard-->
<style>
	#registration-step{margin:0;padding:0;}
	#registration-step li{list-style:none; float:left;padding:5px 10px;border-top:#EEE 1px solid;border-left:#EEE 1px solid;border-right:#EEE 1px solid;}
	#registration-form{clear:both;border:1px #EEE solid;padding:20px;}
	.demoInputBox{padding: 10px;border: #F0F0F0 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
	.registration-error{color:#FF0000; padding-left:15px;}
	.message {color: #00FF00;font-weight: bold;width: 100%;padding: 10px;}
	.btnAction{padding: 5px 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

<!--php wizard end-->
<body class="container1">


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
<?php
if($_SESSION['login_user']!="")
{
	$sql1= "SELECT * FROM login WHERE ID='$user_check'";
	$result1=mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	$firstname =$row1["first_name"];
	$lastname =$row1["last_name"];
	$e_id =$row1["email_id"];
	$ph_no =$row1["ph_no"];

}
?>
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
						<li ><a href="dashboard.php">Dashboard</a></li>
						<li ><a href="shift_report.php">Shift report</a></li>
						<li><a href="maintenance.php">Maintenance</a></li>
						<li  class="active"><a href="maid_report.php">HouseKeeper</a></li>
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




<!-- start edit shift report -->

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
				var id3 = "_condition";
				var id4 = id.concat(id1);
				var id5 = id.concat(id2);
				var id6 = id.concat(id3);

				callfunction(id4,id5,id6);
			});
	});

	function callfunction(id,id1,id2){

		var id_val = document.getElementById(id).value;
		var room_no = document.getElementById(id1).value;
		var condition = document.getElementById(id2).value;
		var recipientname = document.getElementById('recipient-name');
		recipientname.value = room_no;
		var recipientid = document.getElementById('recipient-id');
		recipientid.value = id_val;
		var messagetext = document.getElementById('message-text');
		messagetext.value = condition;
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

<!--Edit report-->
<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>

<!-- shift window start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">

		<script>

			function callcrudaction(){
				var room_no = document.getElementById('recipient-name').value;
				var room_id = document.getElementById('recipient-id').value;
				var condition = document.getElementById('message-text').value;
				var c_id =  '&c_id='+ $("#recipient-id").val();
				var room =  '&room='+ $("#recipient-name").val();
				var condition =  '&condition='+ $("#message-text").val();
				//alert(c_id + room + condition);

				jQuery.ajax({
					url: "edit_housekeeping.php",
					data: c_id + room + condition,
					type: "POST",
					success:function(data){

						document.location.href='maid_report.php';
					}
				});

			}
			function calldelete(id){
				var c_id =  '&c_id='+ $("#recipient-id").val();
				jQuery.ajax({
					url: "delete_housekeeping.php",
					data: c_id,
					type: "POST",
					success:function(data){

						document.location.href='maid_report.php';
					}
				});
			}
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
						<label for="message-text" class="control-label">Condition:</label>
						<select class="form-control"  id="message-text" >
							<option value=" ">Select Condition</option>
							<option value="Cleaned ">Cleaned</option>
							<option value="Dirty">Dirty</option>
							<option value="Need Maintenance">Need Maintenance</option>
						</select>
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

<!--End report-->
<div id="destination" class="destination">
	<div class="container">
		<div class="destintn-grids" align="center"  >
			<div class="col-md-4 desti-grid"  style="font-family: 'TitilliumWeb-Regular'; margin-left:25%; width:50%">
				<div class="message"><?php if(isset($message)) echo $message; ?></div>
				<ul id="registration-step">
					<li id="account" class="highlight" hidden="hidden"></li>
					<li id="password" hidden="hidden"></li>

				</ul>


				<form name="frmRegistration" id="registration-form" method="post">
					<div id="account-field">

						<h2 >Cleaning Report</h2>
						<button style="margin-left: 70%"> <a href="cleaning_report_pdf.php" target="_blank" style="text-decoration: none"  >Generate Report</a></button><br/>
						<?php

						/* $que = "SELECT  * FROM cleaning_report GROUP BY room_no ORDER BY LENGTH(room_no), room_no ASC ";
                         $result1 = mysqli_query($conn, $que);*/
						?>
						<table style="width: 80%">
							<th><strong>Room No.</strong></th>
							<th><strong> Condition</strong></th>
							<th><strong> Housekeeper</strong></th><br/>

							<?php
							/*$j = 0;
                            while($row=mysqli_fetch_array($result1)){
                                $o_id=$row['id'];
                                $user = $row['user_name'];
                                $role_user = $row['role'];
                                $room=$row["room_no"];
                                $cndt = $row['room_condition'];
                                echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$o_id.'"/>
                                                    <input type="text" id="c_'.$j.'_room" disabled="disabled"
                                                    style="width:23%;margin-top:10px" name="c_room" value="'.$room.'"/>
                                                   <input type="text" id="c_'.$j.'_comments" disabled="disabled"
                                                   style="width:30%;margin-top:10px" name="c_amount" value="'.$cndt.'"/>
                                                   <input type="text" id="c_'.$j.'_user" disabled="disabled"
                                                   style="width:30%;margin-top:10px" name="c_amount" value="'.$user.'"/>
                                                   <button type="button" id="c_'.$j.'"
                                                   style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                                   Edit</button><br/>';
                                $j = $j + 1;
                            }*/
							?>



							<?php
							/* $j = 0;
                             while($row=mysqli_fetch_array($result1)){
                                 $o_id=$row['id'];
                                 $user = $row['user_name'];
                                 $role_user = $row['role'];
                                 $room=$row["room_no"];
                                 $cndt = $row['room_condition'];


                                 ?>


                                 <tr>

                                     <td style=" padding-left: 10px " ><span id="id"><?php echo $o_id; ?></span></td>
                                     <td style="  padding-left: 10px"><span id="room"><?php echo $room; ?></span></td>
                                     <td style="  padding-left: 15px"><span id="cndt"><?php echo $cndt; ?></span></td>
                                     <td style="  padding-left: 10px"><span id="user"><?php echo $user; ?></span></td>
                                     <td style="  padding-left: 10px"><span id="submit">
                                             <button type="button" style="margin-left:10px; margin-bottom: 5px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-id="<?php echo $o_id; ?>">Edit</button></span></td>


                                 </tr>

                                 <?php
                                 $j = $j + 1;
                             }*/

							$sql = "SELECT * FROM cleaning_report GROUP BY room_no ORDER BY LENGTH(room_no), room_no ASC";
							$res = mysqli_query($conn, $sql);
							$j = 0;
							while($row2 = mysqli_fetch_array($res)){
								$id = $row2['id'];
								$user = $row2['user_name'];
								$role_user = $row2['role'];
								$room=$row2["room_no"];
								$cndt = $row2['room_condition'];
								echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<tr><td><input type="text" id="c_'.$j.'_room" disabled="disabled"  style="margin-top:10px;" name="c_room" value="'.$room.'"/></td>
									  <td> <input type="text" id="c_'.$j.'_condition" disabled="disabled" style="margin-top:10px;margin-left:5px" name="c_condition" value="'.$cndt.'"/></td>
									   <td><input type="text" id="c_'.$j.'_user" disabled="disabled" style="margin-top:10px;margin-left:5px" name="c_user" value="'.$user.'"/></td>
									  <td> <button type="button" id="c_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button></td></tr>';
								$j = $j + 1;
							}

							?>

						</table>





						<div class="clearfix"></div>
					</div>

			</div>
		</div></div>
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