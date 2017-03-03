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
if($category != 'maid'){
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
    .message {color: #00FF00;font-weight: bold;width: 100%;padding: 10;}
    .btnAction{padding: 5px 10px;background-color: #09F;border: 0;color: #FFF;cursor: pointer; margin-top:15px;}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>

    function validate() {
        var output = true;
        $(".registration-error").html('');
        if($("#account-field").css('display') != 'none') {
            if(!($("#capacity").val())) {
                output = false;
                $("#capacity-error").html("required");
            }
            if(!$("#capacity").val().match(/^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/)) {
                $("#capacity-error").html("Enter number");
                output = false;
            }
            /*if($("#capacity").val() > $("#room").val()){
                $("#capacity-error").html("R u drunk? ;-)");
                output = false;
            }*/

        }

        if($("#password-field").css('display') != 'none') {
            if(!($("#user-password").val())) {
                output = false;
                $("#password-error").html("required");
            }
        )
           /* if(!($("#confirm-password").val())) {
                output = false;
                $("#confirm-password-error").html("Not Matched");
            }
            if($("#user-password").val() != $("#confirm-password").val()) {
                output = false;
                $("#confirm-password-error").html("Not Matched");
            }
        }*/
        return output;
    }
    $(document).ready(function() {
        $("#next").click(function(){
            var output = validate();
            if(output) {
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
                        <!--<li ><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="check_in.php">Check In</a></li>
                        <li><a href="shift_report.php">Shift report</a></li>-->
                        <li class="active"><a href="cleaning_report.php">HouseKeeper</a></li>
                        <li><a href="detailed_report.php">Report</a></li>
                        <li ><a href="add_info.php">Setting</a></li>
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
        <div class="destintn-grids" align="center"  >
            <div class="col-md-4 desti-grid"  style="font-family: 'TitilliumWeb-Regular'; margin-left:25%; width:50%">
                <div class="message"><?php if(isset($message)) echo $message; ?></div>
                <ul id="registration-step">
                    <li id="account" class="highlight" hidden="hidden"></li>
                    <li id="password" hidden="hidden"></li>

                </ul>

                <?php
                if(isset($_POST['submit'])){
                $name = $firstname .' '. $lastname;
                    $role = $_POST['role'];
                    $dirty_room = $_POST['room'];
                    //$capacity = $_POST['capacity'];
                    $selected_room_no = $_POST['selected_room_no'];
                    $condition = $_POST['condition'];

                    //echo "<script language='javascript' type='text/javascript'>alert('".$name. $role. $selected_room_no. $condition."');</script>";

                    $sql = "INSERT INTO cleaning_report (user_name, role, room_no, room_condition, date, time) 
                              VALUES ('$name', '$role', '$selected_room_no', '$condition', NOW(), NOW())";

                    $result=mysqli_query($conn, $sql);
                    //echo "<script language='javascript' type='text/javascript'>alert('".$result."');</script>";
                    if($result==1){
                       // echo "<script language='javascript' type='text/javascript'>alert('added');</script>";
                        echo "<script language='javascript' type='text/javascript'>document.location.href='detailed_report.php';</script>";
                    }
                }
                ?>
                <form name="frmRegistration" id="registration-form" method="post">
                    <div id="account-field">
                        <?php

                        $que = "SELECT  room_no FROM shift_report ";
                        $result = mysqli_query($conn, $que);
                        $count = mysqli_num_rows($result);
                        while($row1 = mysqli_fetch_array($result)){
                            $room = $row1['room_no'];
                        }

                        ?>

                        <table>
                            <tr>
                                <td><strong> Name: </strong></td>
                                <td><input type="text" style=" margin-bottom:10px" id="name" name="name" value="<?php echo $firstname. '&nbsp;'. $lastname; ?>"/></td>
                            </tr>
                            <tr>
                                <td><strong> Role: </strong></td>
                                <td><input type="text" style=" margin-bottom:10px"  name="role" id="role" value="HouseKeeping"/></td>
                            </tr>

                            <tr>
                                <td> <strong> Total Dirty Room: </strong></td>
                                <td> <input type="text" style=" margin-bottom:10px"  id="room" name="room" value="<?php echo $count; ?>"/></td>
                            </tr><br/>

                                    <span id="capacity-error" class="registration-error"></span></br>


                        <tr>
                            <td><label>Select Option for room no:</label><span id="password-error" class="registration-error"></span></td>


                            <td> <select name="selected_room_no" id="selected_room_no" class="selected_room_no" style="width: 100%;" >
                                <option value=" ">Select Room</option>
                                <?php
                                $q = "SELECT * FROM shift_report ";
                                $res1 = mysqli_query($conn, $q);

                                while($room_count = mysqli_fetch_array($res1)){
                                    $all_room = $room_count['room_no'];
                                    echo $all_room;?>
                               <option value="<?php echo $all_room;?> "><?php echo $all_room;?>
                               </option> <?php }?>

                            </select></td>
                        </tr>

                        <tr>
                            <td>
                                <label>Condition:</label><span id="confirm-password-error" class="registration-error"></span></td>
                            <td>
                                <select name="condition" id="condition" class="condition" style="margin-top: 10px" >
                                <option value=" ">Select Condition</option>
                                <option value="Cleaned ">Cleaned</option>
                                <option value="Dirty">Dirty</option>
                                <option value="Need Maintenance">Need Maintenance</option>
                            </select></td>
                        </tr>

                        </table>
                    </div>
                    <input type="submit" class="btnAction" name="submit" value="Submit" style="margin-top:10px; margin-bottom:10px;margin-left:25%" style="display:none;">
                </form>
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