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

	<script type='text/javascript' src='//code.jquery.com/jquery-2.0.2.js'></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

	<!-- shift scripts-->
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
	<!-- shift scripts end-->
	<!--tabs-->
	<style>

		ul#tabs {
			list-style-type: none;
			margin: 0 0 30px 0;
			padding: 0;
			text-align: center; }
		ul#tabs li {
			display: inline-block;
			background-color: #32c896;
			border-bottom: solid 5px #238b68;
			padding: 5px 20px;
			margin-bottom: 4px;
			color: #fff;
			cursor: pointer; }
		ul#tabs li:hover {
			background-color: #238b68; }
		ul#tabs li.active {
			background-color: #238b68; }

		ul#tab {
			list-style-type: none;
			margin: 0;
			padding: 0; }
		ul#tab li {
			display: none;
			padding: 30px;
			border: solid 5px #d2f4e9; }
		ul#tab li.active {
			display: block; }


	</style>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/tabs.js"></script>

	<script>

		jQuery(function($) {
			var index = 'qpsstats-active-tab';
			//  Define friendly data store name
			var dataStore = window.sessionStorage;
			var oldIndex = 0;
			//  Start magic!
			try {
				// getter: Fetch previous value
				oldIndex = dataStore.getItem(index);
			} catch(e) {}

			$( "#tabs" ).tabs({
				active: oldIndex,
				activate: function(event, ui) {
					//  Get future value
					var newIndex = ui.newTab.parent().children().index(ui.newTab);
					//  Set future value
					try {
						dataStore.setItem( index, newIndex );
					} catch(e) {}
				}
			});
		});


	</script>
	<!--tabs end-->
	<!-- start  convert decimal number in 0.00 format-->
	<script>
		$(function() {

			var input = ""; //holds current input as a string

			$("#cash_amount, #visa_amount, #mc_amount, #amex_amount, #disc_amount, #expd_amount, #edit_amount, #ch_amount, #oth_amount").keydown(function(e) {
				//handle backspace key
				if(e.keyCode == 8 && input.length > 0) {
					input = input.slice(0,input.length-1); //remove last digit
					$(this).val(formatNumber(input));
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
	<!-- end -->
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
					var id3 = "_amount";
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
	<!-- conversion of number in modal start  -->
	<!-- start  convert decimal number in 0.00 format-->
	<script>
		$(function() {

			var input = ""; //holds current input as a string

			$("#cash_amount, #visa_amount, #mc_amount, #amex_amount, #disc_amount, #expd_amount, #edit_amount, #ch_amount, #oth_amount").keydown(function(e) {
				//handle backspace key
				if(e.keyCode == 8 && input.length > 0) {
					input = input.slice(0,input.length-1); //remove last digit
					$(this).val(formatNumber(input));
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
	<!-- end -->
	<!-- conversion of number in modal end  -->

	<script>

		jQuery(function($) {
			var index = 'qpsstats-active-tab';
			//  Define friendly data store name
			var dataStore = window.sessionStorage;
			var oldIndex = 0;
			//  Start magic!
			try {
				// getter: Fetch previous value
				oldIndex = dataStore.getItem(index);
			} catch(e) {}

			$( "#main" ).tabs({
				active: oldIndex,
				activate: function(event, ui) {
					//  Get future value
					var newIndex = ui.newTab.parent().children().index(ui.newTab);
					//  Set future value
					try {
						dataStore.setItem( index, newIndex );
					} catch(e) {}
				}
			});
		});


	</script>

	<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>



</head>


<?php
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
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
				var amount =  '&amount='+ $("#message-text").val();


				jQuery.ajax({
					url: "edit_shift.php",
					data: c_id + room + amount,
					type: "POST",
					success:function(data){

						document.location.href='shift_report.php';
					}
				});

			}
			function calldelete(id){
				var c_id =  '&c_id='+ $("#recipient-id").val();
				jQuery.ajax({
					url: "shift_delete.php",
					data: c_id,
					type: "POST",
					success:function(data){

						document.location.href='shift_report.php';
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
						<label for="message-text" class="control-label">Amount:</label>
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
			<h1><span class="glyphicon glyphicon-road" aria-hidden="true" ><img src="../images/Logo Final.jpg" width="175" height="175"/></span></h1>
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
						<li ><a href="dashboard.php">Dashboard</a></li>
						<li class="active"><a href="shift_report.php">Shift report</a></li>
						<li><a href="maintenance.php">Maintenance</a></li>
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


	<div id="main">
		<div class="container">
			<ul id="tabs">
				<li class="active">Cards</li>
				<li>Other</li>
			</ul>
			<ul id="tab">
				<!-- tab 1-->
				<li class="active">
					<div class="container">
						<button style="margin-left: 80%"> <a href="shift_report_pdf.php" target="_blank" style="text-decoration: none"  >Generate Report</a></button>
						<div class="about-top-sec">
							<div class="destintn-grids">
								<div class="col-md-4 desti-grid" style="width:270px">
									<!-- cash start-->
									<div class="desti-info">
										<h2 align="center">Cash</h2>
										<form method="post" id="myform2" action="room_insert.php" >
											<p >
												<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
												<input type="text" id="cash_room" name="cash_room"  style=" float:left ; width:23%; margin-top:10px " />
												<input type="text" id="cash_amount" name="cash_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"/>
												<input type="submit" id="add_cash" name="add_cash" value="Add" style=" float:right; width:31%;margin-top:10px;" >


											</p>
										</form>
									</div>
									<div class="desti-info"  style="margin-top:10px">
										<?php
										$sql = "SELECT * FROM shift_report WHERE type ='Cash' ORDER BY LENGTH(room_no), room_no ASC";
										$res = mysql_query($sql, $conn);
										$j = 0;
										while($row2 = mysql_fetch_array($res)){
											$id = $row2['id'];
											$room= $row2['room_no'];
											$amount = $row2['amount'];
											echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="c_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="c_room" value="'.$room.'"/>
									   <input type="text" id="c_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="c_amount" value="'.$amount.'"/><button type="button" id="c_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
											$j = $j + 1;
										}
										?>
										<span><strong>Total: </strong></span>
										<?php
										$q1= "select SUM(amount) as total from shift_report where type= 'Cash'" ;
										$run = mysql_query($q1,$conn);
										$fetch = mysql_fetch_array($run);
										$total = $fetch  ['total'];
										$decimal = number_format((float) $total,'2', '.' ,'');
										echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';

										$sql1 = "UPDATE  payment  SET cash ='$decimal'";
										$result1 =  mysql_query($sql1,$conn);

										?>

									</div>
								</div>
							</div>
							<!-- cash end-->

							<div class="col-md-4 desti-grid" style="width:270px">
								<!-- visa start-->
								<div class="desti-info" style="font-weight:bold; ">
									<h2 align="center">Visa</h2>
									<form method="post" id="myform2" action="room_insert.php" >
										<p>
											<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
											<input type="text" id="visa_room" name="visa_room"  style=" float:left ; width:23%; margin-top:10px " />
											<input type="text" id="visa_amount" name="visa_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
											<input type="submit" id="add_visa" name="add_visa" value="Add" style=" float:right; width:31%;margin-top:10px; ">


										</p>
									</form>


								</div>
								<div class="desti-info" style="margin-top:10px;">
									<?php
									$sql = "SELECT * FROM shift_report WHERE type ='Visa' ORDER BY LENGTH(room_no), room_no ASC";
									$res = mysql_query($sql, $conn);
									$j = 0;
									while($row2 = mysql_fetch_array($res)){
										$id = $row2['id'];
										$room= $row2['room_no'];
										$amount = $row2['amount'];
										echo '<input type="text" id="v_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="v_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="v_room" value="'.$room.'"/>
									<input type="text" id="v_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="v_amount" value="'.$amount.'"/><button type="button" id="v_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
										$j = $j + 1;
									}
									?>
									<span><strong>Total: </strong></span>
									<?php
									$q1= "select SUM(amount) as total from shift_report where type= 'Visa'" ;
									$run = mysql_query($q1,$conn);
									$fetch = mysql_fetch_array($run);
									$total = $fetch  ['total'];
									$decimal = number_format((float) $total,'2', '.' ,'');
									echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%; margin-top:10px"/>';
									$sql1 = "UPDATE  payment  SET visa ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
									?>
								</div>
								<!-- visa end-->
							</div>
							<!-- master start-->
							<div class="col-md-4 desti-grid" style="width:270px">
								<div class="desti-info" >
									<h2 align="center">Master Card</h2>
									<form method="post" id="myform2" action="room_insert.php">
										<p >
											<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
											<input type="text" id="mc_room"  name="mc_room" style=" float:left ; width:23%; margin-top:10px " />
											<input type="text" id="mc_amount" name="mc_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
											<input type="submit" id="add_mc" name="add_mc" value="Add" style=" float:right; width:31%;margin-top:10px;">


										</p>
									</form>
								</div>
								<div class="desti-info">
									<?php
									$sql = "SELECT * FROM shift_report WHERE type ='Master Card' ORDER BY LENGTH(room_no), room_no ASC";
									$res = mysql_query($sql, $conn);
									$j = 0;
									while($row2 = mysql_fetch_array($res)){
										$id = $row2['id'];
										$room= $row2['room_no'];
										$amount = $row2['amount'];
										echo '<input type="text" id="mc_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="mc_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="mc_room" value="'.$room.'"/>
									<input type="text" id="mc_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="mc_amount" value="'.$amount.'"/><button type="button" id="mc_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
										$j = $j + 1;
									}
									?>
									<span style="margin-top:10px; margin-bottom:10px"><strong>Total: </strong></span>
									<?php
									$q1= "select SUM(amount) as total from shift_report where type= 'Master Card'" ;
									$run = mysql_query($q1,$conn);
									$fetch = mysql_fetch_array($run);
									$total = $fetch  ['total'];
									$decimal = number_format((float) $total,'2', '.' ,'');
									echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
									$sql1 = "UPDATE  payment  SET master ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
									?>
								</div>
							</div>
							<!--master end-->
							<!-- amex start-->
							<div class="col-md-4 desti-grid" style="width:270px">
								<div class="desti-info" >
									<h2 align="center">AMEX</h2>
									<form method="post" id="myform2" action="room_insert.php">
										<p >
											<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
											<input type="text" id="amex_room" name="amex_room" style=" float:left ; width:23%; margin-top:10px " />
											<input type="text" id="amex_amount" name="amex_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
											<input type="submit" id="add_amex" name="add_amex" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px ">


										</p>
									</form>
								</div>
								<div class="desti-info">
									<?php
									$sql = "SELECT * FROM shift_report WHERE type ='American Express' ORDER BY LENGTH(room_no), room_no ASC";
									$res = mysql_query($sql, $conn);
									$j = 0;
									while($row2 = mysql_fetch_array($res)){
										$id = $row2['id'];
										$room= $row2['room_no'];
										$amount = $row2['amount'];
										echo '<input type="text" id="amex_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="amex_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="amex_room" value="'.$room.'"/>
									<input type="text" id="amex_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="amex_amount" value="'.$amount.'"/><button type="button" id="amex_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
										$j = $j + 1;
									}
									?>

									<span><strong>Total: </strong></span>
									<?php
									$q1= "select SUM(amount) as total from shift_report where type= 'American Express'" ;
									$run = mysql_query($q1,$conn);
									$fetch = mysql_fetch_array($run);
									$total = $fetch  ['total'];
									$decimal = number_format((float) $total,'2', '.' ,'');
									echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
									$sql1 = "UPDATE  payment  SET ame_ex ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
									?>
								</div>
							</div>
							<!--AMEX end-->
						</div>



				</li>
				<!-- tab 1 end-->
				<!-- tab 2-->
				<li>
					<div class="container">
						<div class="about-top-sec">
							<div class="destintn-grids">
								<div class="col-md-4 desti-grid" style="width:270px">
									<!-- discovery start-->
									<div class="desti-info">
										<h2 align="center">Discovery</h2>
										<form method="post" id="myform2" action="room_insert.php">
											<p>
												<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
												<input type="text" id="disc_room" name="disc_room"  style=" float:left ; width:23%; margin-top:10px " />
												<input type="text" id="disc_amount" name="disc_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
												<input type="submit" id="add_disc"  name="add_disc" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px ">


											</p>
										</form>
									</div>
									<div class="desti-info"  style="margin-top:10px">
										<?php
										$sql = "SELECT * FROM shift_report WHERE type ='Discovery' ORDER BY LENGTH(room_no), room_no ASC";
										$res = mysql_query($sql, $conn);
										$j = 0;
										while($row2 = mysql_fetch_array($res)){
											$id = $row2['id'];
											$room= $row2['room_no'];
											$amount = $row2['amount'];
											echo '<input type="text" id="disc_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="disc_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="disc_room" value="'.$room.'"/>
									<input type="text" id="disc_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px;" name="disc_amount" value="'.$amount.'"/><button type="button" id="disc_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
											$j = $j + 1;
										}
										?>

										<span><strong>Total: </strong></span>
										<?php
										$q1= "select SUM(amount) as total from shift_report where type= 'Discovery'" ;
										$run = mysql_query($q1,$conn);
										$fetch = mysql_fetch_array($run);
										$total = $fetch['total'];
										$decimal = number_format((float) $total,'2', '.' ,'');
										echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
										$sql1 = "UPDATE  payment  SET discovery ='$decimal'";
										$result1 =  mysql_query($sql1,$conn);
										?>

									</div>
								</div>
							</div>
							<!-- Discovery end-->

							<div class="col-md-4 desti-grid" style="width:270px">
								<!-- expedia start-->
								<div class="desti-info" style="font-weight:bold; ">
									<h2 align="center">Expedia</h2>
									<form method="post" id="myform2" action="room_insert.php">
										<p >
											<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
											<input type="text" id="expd_room" name="expd_room" style=" float:left ; width:23%; margin-top:10px " />
											<input type="text" id="expd_amount" name="expd_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
											<input type="submit" id="add_expd" name="add_expd" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px ">


										</p>
									</form>

								</div>
								<div class="desti-info" style="margin-top:10px;">
									<?php
									$sql = "SELECT * FROM shift_report WHERE type ='Expedia' ORDER BY LENGTH(room_no), room_no ASC";
									$res = mysql_query($sql, $conn);
									$j = 0;
									while($row2 = mysql_fetch_array($res)){
										$id = $row2['id'];
										$room= $row2['room_no'];
										$amount = $row2['amount'];
										echo '<input type="text" id="expd_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="expd_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="expd_room" value="'.$room.'"/>
									<input type="text" id="expd_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="expd_amount" value="'.$amount.'"/><button type="button" id="expd_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
										$j = $j + 1;
									}
									?>

									<span><strong>Total: </strong></span>
									<?php
									$q1= "select SUM(amount) as total from shift_report where type= 'Expedia'" ;
									$run = mysql_query($q1,$conn);
									$fetch = mysql_fetch_array($run);
									$total = $fetch  ['total'];
									$decimal = number_format((float) $total,'2', '.' ,'');
									echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
									$sql1 = "UPDATE  payment  SET expedia ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
									?>
								</div>
								<!-- expedia end-->
							</div>
							<!-- cheque start-->
							<div class="col-md-4 desti-grid" style="width:270px">
								<div class="desti-info" >
									<h2 align="center">Cheque</h2>
									<form method="post" id="myform2" action="room_insert.php" >
										<p >
											<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
											<input type="text" id="ch_room" name="ch_room"  style=" float:left ; width:23%; margin-top:10px " />
											<input type="text" id="ch_amount" name="ch_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"/>
											<input type="submit" id="add_cheque" name="add_cheque" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px" >



										</p>
									</form>
								</div>
								<div class="desti-info">

									<?php
									$sql = "SELECT * FROM shift_report WHERE type ='Cheque' ORDER BY LENGTH(room_no), room_no ASC";
									$res = mysql_query($sql, $conn);
									$j = 0;
									while($row2 = mysql_fetch_array($res)){
										$id = $row2['id'];
										$room= $row2['room_no'];
										$amount = $row2['amount'];
										echo '<input type="text" id="cheque_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="cheque_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="cheque_room" value="'.$room.'"/>
									   <input type="text" id="cheque_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="cheque_amount" value="'.$amount.'"/><button type="button" id="cheque_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
										$j = $j + 1;
									}
									?>
								</div>
								<span><strong>Total: </strong></span>
								<?php
								$q1= "select SUM(amount) as total from shift_report where type= 'Cheque'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
								$sql1 = "UPDATE  payment  SET cheque ='$decimal'";
								$result1 =  mysql_query($sql1,$conn);
								?>
							</div>
						</div>
						<!--cheque end-->
						<!-- other start-->
						<div class="col-md-4 desti-grid" style="width:270px">
							<div class="desti-info" >
								<h2 align="center">Other</h2>
								<form method="post" id="myform2" action="room_insert.php" >
									<p >
										<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
										<input type="text" id="oth_room" name="oth_room"  style=" float:left ; width:23%; margin-top:10px " />
										<input type="text" id="oth_amount" name="oth_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"/>
										<input type="submit" id="add_other" name="add_other" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px" >



									</p>
								</form>
							</div>
							<div class="desti-info">
								<?php
								$sql = "SELECT * FROM shift_report WHERE type ='Other' ORDER BY LENGTH(room_no), room_no ASC";
								$res = mysql_query($sql, $conn);
								$j = 0;
								while($row2 = mysql_fetch_array($res)){
									$id = $row2['id'];
									$room= $row2['room_no'];
									$amount = $row2['amount'];
									echo '<input type="text" id="oth_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="oth_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="oth_room" value="'.$room.'"/>
									   <input type="text" id="oth_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="oth_amount" value="'.$amount.'"/><button type="button" id="oth_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
									$j = $j + 1;
								}
								?>
							</div>
							<span><strong>Total: </strong></span>
							<?php
							$q1= "select SUM(amount) as total from shift_report where type= 'Other'" ;
							$run = mysql_query($q1,$conn);
							$fetch = mysql_fetch_array($run);
							$total = $fetch  ['total'];
							$decimal = number_format((float) $total,'2', '.' ,'');
							echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%;margin-top:10px"/>';
							$sql1 = "UPDATE  payment  SET other ='$decimal'";
							$result1 =  mysql_query($sql1,$conn);
							?>
						</div>
					</div>
					<!--other end-->
		</div>
		</li>
		<!-- tab 2 end-->
		</ul>
	</div>
</div>
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