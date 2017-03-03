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









</head>



<?php

$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
?>



<body>

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
                        <li ><a href="shift_report.php">Shift report</a></li>
                        <li class="active"><a href="maintenance.php">Maintenance</a></li>
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

                    <div class="container">
                        <div class="about-top-sec">
                            <div class="destintn-grids">
                                <div class="col-md-4 desti-grid"  style="font-family: 'TitilliumWeb-Regular'; margin-left:25%; width:50%">

                                    <h2 style="margin-left:30%; margin-bottom: 20px; border:none">Maintenance Report</h2>
                                    <button style="margin-left: 79%"> <a href="maintenance_report_pdf.php" target="_blank" style="text-decoration: none"  >Generate Report</a></button>

                                    <table  style="margin-left:25px; width: 100%">
                                     <th  style=" padding: 10px 10px 10px 10px">No</th>
                                    <th  style=" padding: 10px 10px 10px 10px" >Room No</th>
                                    <th  style=" padding: 10px 10px 10px 10px">Out of Order</th>
                                    <th  style=" padding: 10px 10px 10px 10px">Reason</th>
                                    <th  style=" padding: 10px 10px 10px 10px">comments</th>

                                    <?php
                                    $con=mysql_connect('localhost','root','');
                                    $db=mysql_select_db('workspace');
                                    $sql="SELECT * FROM out_of_order";
                                    $result = mysql_query($sql,$con);

                                    while($row=mysql_fetch_array($result)){
                                        $kd=$row['Id'];
                                        $room=$row["room_no"];
                                        $order=$row["out_of_order"];
                                            $reason=$row["reason_order"];
                                            $comments=$row["comment_order"];

                                        ?>


                                        <tr>

                                            <td style=" padding-left: 10px;padding-bottom: 10px " ><?php echo $kd; ?></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><?php echo $room; ?></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><?php echo  $order; ?></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><?php echo $reason; ?></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><?php echo $comments; ?></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><a href="edit_maintenance.php?id=<?php echo $kd; ?>">Edit</a></td>
                                            <td style=" padding-left: 10px;padding-bottom: 10px "><a href="done.php?id=<?php echo $kd; ?>">Done</a></td>
                                           </tr>

                                        <?php
                                    }
                                    ?>


                                    </table>

                                    <h2 style="margin-left:35%; margin-top: 40px; margin-bottom: 10px; border:none">Solved</h2>
                                    <table  style="margin-left:25px; width: 100%">
                                        <th  style=" padding: 10px 10px 10px 10px">No</th>
                                        <th  style=" padding: 10px 10px 10px 10px" >Room No</th>
                                        <th  style=" padding: 10px 10px 10px 10px">Out of Order</th>
                                        <th  style=" padding: 10px 10px 10px 10px">Reason</th>
                                        <th  style=" padding: 10px 10px 10px 10px">comments</th>
                                    <form method="post" id="form">
                                        <?php
                                        $con=mysql_connect('localhost','root','');
                                        $db=mysql_select_db('workspace');
                                        $sql="SELECT * FROM maintenance";
                                        $result = mysql_query($sql,$con);

                                        while($row=mysql_fetch_array($result)){
                                            $o_id=$row['id'];
                                            $room=$row["room_no"];
                                            $order=$row["out_of_order"];
                                            $reason=$row["reason"];
                                            $comments=$row["comments"];

                                            ?>


                                            <tr>

                                                <td  style=" padding-left: 10px;padding-bottom: 10px "><span id="id"><?php echo $o_id; ?></span></td>
                                                <td  style=" padding-left: 10px;padding-bottom: 10px "><span id="room"><?php echo $room; ?></span></td>
                                                <td  style=" padding-left: 10px;padding-bottom: 10px " ><span id="order"><?php echo  $order; ?></span></td>
                                                <td  style=" padding-left: 10px;padding-bottom: 10px "><span id="reason"><?php echo $reason; ?></span></td>
                                                <td  style=" padding-left: 10px;padding-bottom: 10px "><span id="comments"><?php echo $comments; ?></span></td>
                                                <td  style=" padding-left: 10px;padding-bottom: 10px "><a href="undo.php?id=<?php echo $o_id; ?>">Undo</a></td>
                                                <td style=" padding-left: 10px;padding-bottom: 10px "><a href="delete.php?id=<?php echo $o_id; ?>">Delete</a></td>

                                            </tr>

                                            <?php
                                        }
                                        ?>


                                        </table>
                                </div>
                                </div>

                        </div>
</div>
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