<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$category = $_SESSION['category'];
if($category != 'maid'){
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
                        <li><a href="cleaning_report.php">HouseKeeper</a></li>
                        <li><a href="detailed_report.php">Report</a></li>
                        <li class="active"><a href="add_info.php">Setting</a></li>
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
            <div class="col-md-4 desti-grid"  style="font-family: 'TitilliumWeb-Regular'; margin-left:25%">
                <div class="desti-info"  >

                    <h2 style="margin-left:25%; margin-top:10px; border:none">Add Information</h2>

                    <form method="post" id="info_form">
                        <table style="margin-left:40px">
                            <tr><td><strong>Name:</strong></td><td> <input type="text" value="<?php echo $row1["Username"]; ?>" style="margin-bottom:10px; margin-left:5px" name="name" id="name" ></td></tr>
                            <tr><td><strong>Email Id:</strong></td><td> <input type="email" value="<?php echo $row1["email_id"]; ?>" style="margin-bottom:10px; margin-left:5px" name="e_id" id="e_id"></td></tr>
                            <tr><td><strong>Phone No:</strong></td><td><input type="tel" value="<?php echo $row1["ph_no"]; ?>" style="margin-bottom:10px; margin-left:5px" name="ph_no" id="ph_no"></td></tr>

                        </table>
                        <input type="submit" name="submit" value="Submit" style="margin-top:10px; margin-bottom:10px;margin-left:25%">
                    </form>
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