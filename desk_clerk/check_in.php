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
if($category != 'Desk Clerk'){
	header('Location:../index.php');
	session_destroy();
    		exit();
}
date_default_timezone_set('America/Los_Angeles');

?>
<!DOCTYPE HTML>
<html>
<head>
<title>D Aves</title>
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
  
    
</head>
<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
	?>
   
<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>
<body>


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
					 <li ><a href="dashboard.php">Dashboard</a></li>
                      <li class="active"><a href="check_in.php">Check In</a></li>
					 <li><a href="shift_report.php">Shift report</a></li>				
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
			
             				 
             <!-- check in detail start-->
				 
               <div class="desti-info" style="font-weight:bold;">
                	<div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; ">	
					 &ensp;<h2 style="color:#35b579; padding-top:10px">Personals Details:</h2>
                        <form method="post" id="check_in">
                                <div class="col-md-4 left1"  style="font-family: 'TitilliumWeb-Regular'; ">
                            
                                   <label>Last Name:</label> <br/>
                                    <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="lname" id="lname" /><br/>
                                </div>
                                <div class="col-md-4 left2"  style="font-family: 'TitilliumWeb-Regular'; padding-left:15px  ">
                                    <label>First Name:</label><br/>
                                    <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="fname" id="lname" ><br/>
                                </div>
                     		<div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; ">
                                <label>Address1:</label><br/> 
                                <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="add1" id="add1"><br/>
                               
                                <label>Address2:</label><br/>
                                <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="add2" id="add2"><br/>
                                 <div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px ">
                                     <label >City:</label><br/>
                                     <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="city" id="city">
                                 </div>
                                 <div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                                      <label>State:</label><br/>
                                      <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="state" id="state"><br/>
                                </div>
                      			<div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                                      <label>Zip:</label><br/>
                                      <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="zipcode" id="zipcode" onblur="updateCityState(this.value);"><br/>	
                      			</div>
                   			</div>
                   			<div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; ">
                                <label>Phone No.:</label><br/>
                                <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="ph_no" id="ph_no"><br/>
                            </div>
                            <div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; ">
                                <label>Email Id:</label><br/>
                                <input type="email" value="" style="margin-bottom:10px; margin-left:5px" name="email" id="email"><br/>
                            </div>
                            
                    	 </div>
                  
                 <div class="desti-info1" style="font-weight:bold;">
                
                  	<div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; ">
                  
                   			<h2 style="color:#35b579; padding-top:10px">Other Details:</h2><br/>
                   			<div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                               <label>Rate:</label><br/>
                               <input type="text" value="" style="margin-bottom:10px; margin-left:5px" name="rate" id="rate" ><br/>
                            </div>
                           <div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                               <label>Nights:</label><br/>
                               <input type="number" value="" style="margin-bottom:10px; margin-left:1px" name="night" id="night" ><br/>
                       	   </div>
              			 <div class="col-md-12"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px">
               				<div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                              <label>Payment Method:</label><br/>
                             
                              <select id="edition" onChange="func()" style="margin-left:8px; width:52%">
                              <option value="none" selected >----Select ----</option>
                              <option>Cash</option>
                              <option>Card</option>
                              <option>Billing</option>
                              <option>Company Payment</option>
                              </select><br/>
                            </div>
                  
                              <div id ="trhide" style="visibility:hidden">
                              	<div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                                  <label > Card No:</label><br/>
                                  <input type="password" value="" style="margin-bottom:10px; margin-left:5px" name="card_no" id="card_no" >
                                </div>
                             	<div class="col-md-4"  style="font-family: 'TitilliumWeb-Regular'; padding-left:0.15px  ">
                                  <label > Expirtion Date:</label><br/>
                                  <input type="date" value="" style="margin-bottom:10px; margin-left:5px" name="date" id="date" >
                              	</div>
                              </div>
                             
								<script type="text/javascript">
                                 function func() {
                                   var elem = document.getElementById("edition");
                                
                                   if(elem.value == "Card") {
                                      document.getElementById("trhide").style.visibility = "visible"; 
                                   } else {
                                     document.getElementById("trhide").style.visibility = "hidden"; 
                                   }
                                 }
                                </script>
                 		</div>
                   </div>
                 </div>
                	<input type="submit" name="submit" value="Submit" style="margin-top:10px; margin-bottom:10px;margin-left:25%">
                </form>
                       
            </div>    
				
                 <!-- chck in detail end-->
                
			
            
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