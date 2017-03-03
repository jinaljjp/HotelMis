<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'Manager'){
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
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="../css/tabs.css" type="text/css" media="screen" charset="utf-8" />
        
        
         <script type='text/javascript' src='//code.jquery.com/jquery-2.0.2.js'></script>
  <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  
  <style type='text/css'>
    #dialog-form{
    display:none;
}
  </style>
        
 		
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
<script type='text/javascript'>//<![CDATA[
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
			  
			  //alert(id2); 	 	
            console.log($(this));
            var divElem = $(this);
			
			callfunction(id4,id5,id6);
            dialog = $( "#dialog-form" ).dialog({
                height: 300,
                width: 350,
                modal: true,
				
                buttons: {
                    "Save": function() {
                        divElem.find('.text').text($( "#dialog-form input" ).val());
                        dialog.dialog( "close" );
						callcrudaction(id4);
                    },
					delete: function(){
						calldelete(id4);
					},
                    Cancel: function() {
                        dialog.dialog( "close" );
                    }
					
                }
				
            });
            
        }
    );
});//]]> 


</script>
<!-- tabs script-->
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

<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script></head>



	</head>

	<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
		
	?>
	
      
 	
	<body>
 

		
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

        	<h1 style="text-decoration:none">Room Shift Report</h1>
            
          </div>
		
		<ul id="navigation">
			<li><a href="dashboard.php">Daily Report</a></li>
            <li><a href="maintenance.php">Maintenance</a></li>
			<li><span class="active">Room Shift Report</span></li>
			<li><a href="add_info.php">Settings</a></li>
			<li style="padding-left:240px"> Hi <?php
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
			<li> | Date : <?php echo date("m/d/Y");?></li>
			<li><a href="../logout.php">Log Out</a> </li>    
		</ul>

		

<div id="dialog-form">
	
    
    <script>
	$(function() {
    
    var input = ""; //holds current input as a string
    
    $("#edit_amount").keydown(function(e) {     
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
     
	 
	 function callcrudaction(id){
			 var c_id =  '&c_id='+ $("#" + id).val();
			 var room =  '&room='+ $("#edit_room").val();
			 var amount =  '&amount='+ $("#edit_amount").val();
			// alert(c_id + room + amount);
			
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
			 var c_id =  '&c_id='+ $("#" + id).val();
			jQuery.ajax({
	url: "shift_delete.php",
	data: c_id,
	type: "POST",
	success:function(data){
		
				document.location.href='shift_report.php';
	}
	});

}  
function callfunction(id,id1,id2){
	
	var id_val = document.getElementById(id).value;
	document.getElementById("edit_room").value = document.getElementById(id1).value;
    //document.getElementById("edit_amount").value = document.getElementById(id2).value;
	
}
	    </script>

    
    
    <label>Room No:</label><input type="text" id="edit_room" value="" /> <br/>
    <label>Amount:</label><input type="text" id="edit_amount"  /> 
</div>

<div id="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Cards</a></li>
        <li><a href="#tab2">Other</a></li>
        
    </ul>
 
   
<div id="content" class="container_16 clearfix">
 
        <div id="tab1" class="tab active">
			<div class="grid_99"  style="color:#000000">
				<div class="box" style="width:auto">
					<h2 align="center">Cash</h2>
					<form method="post" id="myform2" action="room_insert.php" >
							<p >
								<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
                                <input type="text" id="cash_room" name="cash_room"  style=" float:left ; width:23%; margin-top:10px " />
                                <input type="text" id="cash_amount" name="cash_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"/>
                               	<input type="submit" id="add_cash" name="add_cash" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px" >
                                
						<?php $sql1= "SELECT * FROM login WHERE ID='$user_check'";
										$result1=mysql_query($sql1,$conn);
										$row1 = mysql_fetch_array($result1);
										$username =$row1["Username"];
									
											$query1 = "update shift_report SET User = '$username' ";
											$run_q = mysql_query($query1,$conn);
										
							?>
							</p>
						</form>
				</div>
                <div class="box" style="width:auto">
               
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
									   <input type="text" id="c_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="c_amount" value="'.$amount.'"/><button id= "c_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?> 
                                </div>
                                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'Cash'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								
								 $sql1 = "UPDATE  payment  SET cash ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
													
								 ?>
                                
              </div>
              <div class="grid_99" style="color:#000000">
				<div class="box" style="width:auto">
					<h2 align="center">Visa</h2>
					<form method="post" id="myform2" action="room_insert.php" >
							<p>
								<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
                                <input type="text" id="visa_room" name="visa_room"  style=" float:left ; width:23%; margin-top:10px " />
                                <input type="text" id="visa_amount" name="visa_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
                               	<input type="submit" id="add_visa" name="add_visa" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px ">
								
							
							</p>
						</form>
				</div>
                <div class="box" style="width:auto">	
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
									<input type="text" id="v_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="v_amount" value="'.$amount.'"/><button id= "v_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?>
                                </div>
                                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'Visa'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET visa ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
				</div>
                <div class="grid_99" style="color:#000000">
				<div class="box" style="width:auto">
					<h2 align="center">Master Card</h2>
					<form method="post" id="myform2" action="room_insert.php">
							<p >
								<span><strong>Room # </strong></span>   <span><strong> Amount</strong></span><br/>
                                <input type="text" id="mc_room"  name="mc_room" style=" float:left ; width:23%; margin-top:10px " />
                                <input type="text" id="mc_amount" name="mc_amount" style=" float:center; width:30%; margin-top:10px;margin-left:1px"  />
                               	<input type="submit" id="add_mc" name="add_mc" value="Add" style=" float:right; width:31%;margin-top:10px;margin-left:1px">
								
							
							</p>
						</form>
				</div>
                <div class="box" style="width:auto">
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
									<input type="text" id="mc_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="mc_amount" value="'.$amount.'"/><button id= "mc_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?>
                                </div>
                                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'Master Card'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET master ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
                </div>
                <div class="grid_99" style="color:#000000">
				<div class="box" style="width:auto">
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
                <div class="box" style="width:auto">	
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
									<input type="text" id="amex_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="amex_amount" value="'.$amount.'"/><button id= "amex_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?>
                                </div>
                                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'American Express'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET ame_ex ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
				</div>
                <div class="grid_99" style="color:#000000">
				<div class="box" style="width:auto">
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
                <div class="box" style="width:auto">
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
									<input type="text" id="disc_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="disc_amount" value="'.$amount.'"/><button id= "disc_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?>
				</div>
                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'Discovery'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET discovery ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
                </div>
                
                <div class="grid_99" style="color:#000000">
				<div class="box" style="width:auto">
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
                <div class="box" style="width:auto">
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
									<input type="text" id="expd_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="expd_amount" value="'.$amount.'"/><button id= "expd_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
								$j = $j + 1;
								}
								?>
				</div>
                <span><strong>Total: </strong></span>
								<?php 
								$q1= "select SUM(amount) as total from shift_report where type= 'Expedia'" ;
								$run = mysql_query($q1,$conn);
								$fetch = mysql_fetch_array($run);
								$total = $fetch  ['total'];
								$decimal = number_format((float) $total,'2', '.' ,'');
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET expedia ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
                      </div>
			</div>
             <div id="tab2" class="tab">
                <div class="grid_99"  style="color:#000000">
				<div class="box" style="width:auto">
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
                <div class="box" style="width:auto">
               
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
									   <input type="text" id="cheque_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="cheque_amount" value="'.$amount.'"/><button id= "cheque_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
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
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET cheque ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
              </div>
               <div class="grid_99"  style="color:#000000">
				<div class="box" style="width:auto">
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
                <div class="box" style="width:auto">
               
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
									   <input type="text" id="oth_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="oth_amount" value="'.$amount.'"/><button id= "oth_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button>';
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
								echo '<input type="text" name="total" id="total" value="'.$decimal.'" style="width:50%"/>';
								 $sql1 = "UPDATE  payment  SET other ='$decimal'";
									$result1 =  mysql_query($sql1,$conn);
								 ?>
              </div>
             </div>
           
           
            </div>
            </div>
		</body>
</html>