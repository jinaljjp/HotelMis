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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <!-- shift scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
    <!-- shift scripts end-->


    <!--edit modal scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <script type='text/javascript' src='//code.jquery.com/jquery-2.0.2.js'></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

    <script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>
    <style type='text/css'>
        #dialog-form{
            display:none;
        }
    </style>
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
            border: solid 4px #d2f4e9; }
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
    <!--validateion script-->
    <script type="text/javascript">
        function validate()
        {

            if(document.user_form.cat.value=="")
            {
                alert("Please select category");
                document.user_form.cat.focus();
                return false;
            }

            if(document.user_form.name1.value=="")
            {
                alert("Please enter name");
                document.user_form.name1.focus();
                return false;
            }
            if(document.user_form.e_id1.value=="")
            {
                alert("Please enter Email ID");
                document.user_form.e_id1.focus();
                return false;
            }
            if(document.user_form.pass1.value=="")
            {
                alert("Please enter Password");
                document.user_form.pass1.focus();
                return false;
            }
            if(document.user_form.ph_no1.value=="")
            {
                alert("Please enter phone number");
                document.user_form.ph_no1.focus();
                return false;
            }
            return true;
        }
    </script>


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
                    var id2 = "_first";
                    var id3 = "_last";
                    var id4 = id.concat(id1);
                    var id5 = id.concat(id2);
                    var id6 = id.concat(id3);

                    //alert(id4 + id5 + id6);
                    callfunction(id4,id5,id6);
                });
        });

        function callfunction(id,id1,id2){

            var id_val = document.getElementById(id).value;
            var first = document.getElementById(id1).value;
            var last = document.getElementById(id2).value;
            var recipientname = document.getElementById('recipient-name');
            recipientname.value = first;
            var recipientid = document.getElementById('recipient-id');
            recipientid.value = id_val;
            var recipientname1 = document.getElementById('recipient-name1');
            recipientname1.value = last;
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
                        <li><a href="maintenance.php">Maintenance</a></li>
                        <li><a href="maid_report.php">HouseKeeper</a></li>
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


    <div id="main">
        <div class="container">
            <ul id="tabs">
                <li class="active">Edit Information</li>
                <li>Add New User</li>
            </ul>
            <button style="margin-left: 80%"> <a href="user_report_pdf.php" target="_blank" style="text-decoration: none"  >Generate Report</a></button>
<br/><br/>
            <ul id="tab">
                <!-- tab 1-->
                <li class="active">
                    <div class="container">

                        <div class="about-top-sec">
                            <div class="destintn-grids">
                                <div class="col-md-4 desti-grid" style="width:290px; margin-left: 350px">
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
                                    <form method="post" id="info_form">
                                        <table style="margin-left:40px; width: 100%">
                                            <tr><td ><strong>Name:</strong></td><td> <input type="text" value="<?php echo $row1["Username"]; ?>" style="margin-bottom:10px; margin-left:5px" name="name" id="name" ></td></tr>
                                            <tr><td ><strong>Email Id:</strong></td><td> <input type="email" value="<?php echo $row1["email_id"]; ?>" style="margin-bottom:10px; margin-left:5px" name="e_id" id="e_id"></td></tr>
                                            <tr><td><strong>Phone No:</strong></td><td><input type="tel" value="<?php echo $row1["ph_no"]; ?>" style="margin-bottom:10px; margin-left:5px" name="ph_no" id="ph_no"></td></tr>

                                        </table>
                                        <input type="submit" name="submit" value="Submit" style="margin-top:10px; margin-bottom:10px;margin-left:40%">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                </li>
                <!-- tab 1 end-->








                <!-- tab 2-->

                <?php
                $conn=mysqli_connect('localhost','root','') or die(mysql_errno());
                $db=mysqli_select_db($conn, 'workspace') or die('Database doesnot exist');
                if(isset($_POST['user_submit'])){
                    $cat = $_POST['cat'];
                    $fname = $_POST['fname1'];
                    $lname = $_POST['lname1'];
                    $name = $_POST['name1'];
                    $email = $_POST['e_id1'];
                    $pass = $_POST['pass1'];
                    $ph_no = $_POST['ph_no1'];
                    $sql="SELECT user_id FROM login WHERE designation ='". $cat. "'" ;
                    $result=mysql_query($sql);

                    $count = mysql_num_rows($result);
                    //echo $count;
                    $i =0;
                    $u_id =  array();
                    while($i<$count){
                        $row= mysql_fetch_array($result);
                        $u_id[] = $row['user_id'];

                        //echo $u_id[$i]."<br/>";
                        $i++;
                    }


                    $l=0;
                    for($i = 0; $i<= $count; $i++){
                        $user_id = $cat."_".$i;
                        $k = 0;
                        for($j =0; $j < $count; $j++){
                            if($u_id[$j] == $user_id){
                                $k++;

                            }
                        }
                        if($k == 0){
                            $new_id = $user_id;
                            //echo $new_id;
                            $query = "INSERT INTO login (user_id,first_name, last_name, Username, password, email_id, ph_no, designation) values ('$new_id','$fname','$lname','$name','$pass','$email','$ph_no', '$cat') ";
                            $res = mysql_query($query,$conn);
                            break;
                        }
                    }



                }
                ?>

                <li>
                    <div class="container">
                        <div class="about-top-sec">
                            <div class="destintn-grids">
                                <h2 style="margin-left:37%; border:none">New User</h2>
                                <form method="post" id="user_form" name="user_form" onSubmit="return(validate());" >
                                    <p style="width:70%; margin-left:37%">
                                        <strong>Category: </strong><br/>
                                        <select style="width:31%" name="cat" id="cat">
                                            <option value="">Select Category</option>
                                            <option name='desk_clerk' value='Desk Clerk'>Desk Clerk</option>
                                            <option name='maintenance' value='Maintenance'>Maintenance</option>
                                            <option name='maid' value='maid'>Maid</option>
                                        </select>
                                        <br/>

                                        <strong>First Name:</strong><br/><input type="text" style="width:30%"  value="" name="fname1" id="fname1" ><br/>
                                        <strong>Last Name:</strong><br/><input type="text" style="width:30%"  value="" name="lname1" id="lname1" ><br/>
                                        <strong>Userame:</strong><br/><input type="text" style="width:30%"  value="" name="name1" id="name1" ><br/>
                                        <strong>Email Id:</strong><br/><input type="email"  style="width:30%"   value="" name="e_id1" id="e_id1"><br/>
                                        <strong>Password:</strong><br/><input type="password"  style="width:30%"   value="" name="pass1" id="pass1"><br/>
                                        <strong>Phone No:</strong><br/><input type="tel" style="width:30% " value="" name="ph_no1" id="ph_no1"><br/>
                                        <input type="submit" id="user_submit" name="user_submit" style="margin-top:10px;margin-left:65px" value = "Submit" />
                                    </p>
                                </form>




                                <!-- shift window start -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                    <div class="modal-dialog" role="document">

                                        <script>

                                            function callcrudaction(){
                                                var first = document.getElementById('recipient-name').value;
                                                var id = document.getElementById('recipient-id').value;
                                                var last = document.getElementById('recipient-name1').value;
                                                var email = document.getElementById('recipient-email').value;
                                                var phone = document.getElementById('message-text').value;
                                                var c_id =  '&c_id='+ $("#recipient-id").val();
                                                var firstname =  '&firstname='+ $("#recipient-name").val();
                                                var lastname =  '&lastname='+ $("#recipient-name1").val();
                                                var email_id =  '&email_id='+ $("#recipient-email").val();
                                                var phone_no =  '&phone_no='+ $("#message-text").val();
                                                //alert(c_id + firstname + lastname);

                                                jQuery.ajax({
                                                    url: "edit_user.php",
                                                    data: c_id + firstname + lastname + email_id + phone_no,
                                                    type: "POST",
                                                    success:function(data){

                                                        document.location.href='add_info.php';
                                                    }
                                                });

                                            }
                                            function calldelete(id){
                                                var c_id =  '&c_id='+ $("#recipient-id").val();
                                                jQuery.ajax({
                                                    url: "delete_user.php",
                                                    data: c_id,
                                                    type: "POST",
                                                    success:function(data){

                                                        document.location.href='add_info.php';
                                                    }
                                                });
                                            }
                                        </script>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="exampleModalLabel">Edit User</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">First name</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                        <input type="text" hidden="true" id="recipient-id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name1" class="control-label">Last name</label>
                                                        <input type="text" class="form-control" id="recipient-name1">
                                                       <!-- <input type="text" hidden="true" id="recipient-id">-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-email" class="control-label">Email ID</label>
                                                        <input type="email" class="form-control" id="recipient-email">
                                                        <!-- <input type="text" hidden="true" id="recipient-id">-->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Phone No.</label>
                                                        <input type="number" class="form-control"  id="message-text" >

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

                                    <!-- Desk clecrk start-->
                                    <div class="col-md-4 desti-grid" style="width:290px;">
                                        <div class="desti-info" >

                                            <?php
                                            $sql1 = "SELECT * FROM login WHERE designation = 'Desk Clerk'";
                                            $res1 = mysqli_query($conn, $sql1);
                                            echo '<h2 >Desk clerk</h2><br/>
                                                <span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span>&nbsp;Last name</span><br/>';
                                            $j = 0;
                                            while($row2 = mysqli_fetch_array($res1)){
                                                $id = $row2['ID'];
                                                $first = $row2['first_name'];
                                                $last = $row2['last_name'];

                                                echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="c_'.$j.'_first" disabled="disabled"  style="margin-top:10px; width:35%" name="c_first" value="'.$first.'"/>
									  <input type="text" id="c_'.$j.'_last" disabled="disabled" style="margin-top:10px;width:35%" name="c_last" value="'.$last.'"/>
									  <button type="button" id="c_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
                                                $j = $j + 1;
                                            }


                                            ?>

                                        </div>

                                    </div>
                                    <!--Desk clerk end-->


                                <!-- Maintenance  start-->
                                <div class="col-md-4 desti-grid" style="width:300px">
                                    <div class="desti-info" >


                                            <?php


                                            $sql1 = "SELECT * FROM login WHERE designation = 'Maintenance'";
                                            $res1 = mysqli_query($conn, $sql1);
                                            echo '<h2 >Maintenance</h2><br/>
                                                <span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span>&nbsp;Last name</span><br/>';
                                            $j = 0;
                                            while($row2 = mysqli_fetch_array($res1)){
                                                $id = $row2['ID'];
                                                $first = $row2['first_name'];
                                                $last = $row2['last_name'];

                                                echo '<input type="text" id="m_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="m_'.$j.'_first" disabled="disabled"  style="margin-top:10px; width:35%" name=",m_first" value="'.$first.'"/>
									  <input type="text" id="m_'.$j.'_last" disabled="disabled" style="margin-top:10px;width:35%" name="m_last" value="'.$last.'"/>
									  <button type="button" id="m_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
                                                $j = $j + 1;
                                            }


                                            ?>
                                        </div>


                                </div>
                                <!--Maintenance end-->

                                <!-- Housekeeper start-->
                                <div class="col-md-4 desti-grid" style="width:290px">
                                    <div class="desti-info" >

                                        <?php
                                        $sql1 = "SELECT * FROM login WHERE designation = 'maid'";
                                        $res1 = mysqli_query($conn, $sql1);
                                        echo '<h2 >Housekeeper</h2><br/>
                                                <span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span>&nbsp;Last name</span><br/>';
                                        $j = 0;
                                        while($row2 = mysqli_fetch_array($res1)){
                                            $id = $row2['ID'];
                                            $first = $row2['first_name'];
                                            $last = $row2['last_name'];

                                            echo '<input type="text" id="h_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="h_'.$j.'_first" disabled="disabled"  style="margin-top:10px; width:35%" name="h_first" value="'.$first.'"/>
									  <input type="text" id="h_'.$j.'_last" disabled="disabled" style="margin-top:10px;width:35%" name="h_last" value="'.$last.'"/>
									  <button type="button" id="h_'.$j.'" style="margin-left:10px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button></br>';
                                            $j = $j + 1;
                                        }


                                        ?>

                                    </div>

                                </div>
                                <!--Housekeeper end-->


                            </div>

                        </div>
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