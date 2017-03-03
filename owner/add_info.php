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
<!DOCTYPE html>
<!--[if gt IE 8]>
	<!--><html style="background-color: rgb(250, 250, 250); background-image: 'ng-app='FormCrafts"><!--<![endif]-->
	<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
  
  <script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>
  <style type='text/css'>
    #dialog-form{
    display:none;
}
  </style>
  
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
 <!-- edit window script-->
<script type='text/javascript'>//<![CDATA[
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
            console.log($(this));
            var divElem = $(this);
			
			callfunction(id4,id5,id6);
            dialog = $( "#dialog-form" ).dialog({
                height: 350,
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


		<body class="" >
        <h1 id="head">Daily Report</h1>
		
		<ul id="navigation">
			<li><a href="dashboard.php">Daily Report</a></li>
			<li><a href="maintenance.php">Maintenance</a></li>
            <li><a href="shift_report.php">Room Shift Report</a></li>
			<li><span class="active">Settings</span></li>
			<li style="padding-left:240px"> Hi <?php
				if($_SESSION['login_user']!="")
				{
					$sql1= "SELECT * FROM login WHERE ID='$user_check'";
					$result1=mysql_query($sql1,$conn);
					$row1 = mysql_fetch_array($result1);
					echo $row1["first_name"].'&nbsp;'.$row1["last_name"];
					
				}
				?> </li>
            <li>| Date: <?php echo date("m/d/Y");?> </li>
            <li><a href="../logout.php">Log Out</a> </li>
            
		</ul> 
     <!-- load window-->
<div id="dialog-form">
    <script>
 function callcrudaction(id){
			 var id =  '&id='+ $("#" + id).val();
			 var fname =  '&fname='+ $("#fname2").val();
			 var lname =  '&lname='+ $("#lname2").val();
			 var email =  '&email='+ $("#e_id2").val();
			  var phone =  '&phone='+ $("#ph_no2").val();
			// alert(c_id + room + amount);
			
	jQuery.ajax({
	url: "edit_user.php",
	data: id + fname + lname + email + phone,
	type: "POST",
	success:function(data){
		
				document.location.href='add_info.php';
	}
	});
			
}  
 function calldelete(id){
			 var c_id =  '&c_id='+ $("#" + id).val();
			jQuery.ajax({
	url: "delete_user.php",
	data: c_id,
	type: "POST",
	success:function(data){
		
				document.location.href='add_info.php';
	}
	});

}  
function callfunction(id,id1,id2){
	
	var id_val = document.getElementById(id).value;
	document.getElementById("fname2").value = document.getElementById(id1).value;
    document.getElementById("lname2").value = document.getElementById(id2).value;
	
}
	    </script>

    
    
    <label>First Name:</label><input type="text" id="fname2" value="" /> <br/>
    <label>last name:</label><input type="text" id="lname2"  /> 
    <label>Email Id:</label><input type="text" id="e_id2"  /> 
    <label>phone no:</label><input type="text" id="ph_no2"  /> 
</div>
	
           
 <div id="tabs">
    <ul class="tab-links">
        <li class="active"><a href="#tab1">Edit Information</a></li>
        <li><a href="#tab2">Add User</a></li>
        
    </ul>
    	
               <div id="tab1" class="tab active">
                 <h2 style="margin-left:37%;; border:none">Add Information</h2>

                  <form method="post" id="info_form">
                 <p style="width:70%; margin-left:37%"> 
                 <strong>Name:</strong><br/><input type="text" style="width:30%"  value="<?php echo $row1["Username"]; ?>" name="name" id="name" ><br/>
                  <strong>Email Id:</strong><br/><input type="email"  style="width:30%"   value="<?php echo $row1["email_id"]; ?>" name="e_id" id="e_id"><br/>
                  <strong>Phone No:</strong><br/><input type="tel" style="width:30%"    value="<?php echo $row1["ph_no"]; ?>" name="ph_no" id="ph_no"><br/>
                  <input type="submit" name="submit" value="Submit" style="margin-top:10px;margin-left:65px">
                  </p>
                  </form>
                       </div>
           
            <div id="tab2" class="tab">
           

             <?php
					$conn=mysql_connect('localhost','root','') or die(mysql_errno());
					$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
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


                    <h2 style="margin-left:37%; border:none">New User</h2>
                     <form method="post" id="user_form" name="user_form" onSubmit="return(validate());" >
                         <p style="width:70%; margin-left:37%"> 
                         <strong>Category: </strong><br/>
                         <select style="width:31%" name="cat" id="cat">
                         <option value="">Select Category</option>
                         <option name='manager' value='Manager'>Manager</option>
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
                           <div class="grid_99" style="font-size:11px; width:33.33%;"  >
							 <?php
                       
								$sql2="SELECT * FROM login WHERE designation = 'Desk Clerk'";
								$result2 = mysql_query($sql2,$conn);
								echo ' <h2 >Desk Clerk</h2>
								<span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
								<span>&nbsp;Last name</span><br/>';
								$j = 0;
								while($row2 = mysql_fetch_array($result2)){
									$id = $row2['ID'];
									$fname= $row2['first_name'];
									$lname = $row2['last_name'];
									echo '<input type="text" id="dc_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="dc_'.$j.'_first" disabled="disabled"  style="width:23%;margin-top:10px" name="first" value="'.$fname.'"/>
									<input type="text" id="dc_'.$j.'_last" disabled="disabled" style="width:30%;margin-top:10px" name="last" value="'.$lname.'"/><button id= "dc_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button><br/>';
								$j = $j + 1;
								}
						
                        ?>
                            
             
                           
             
                            </table></div>
                            <div class="grid_99" style=" font-size:11px; width:33.33%" >
							 <?php
                       
                        $sql2="SELECT * FROM login WHERE designation = 'Maintenance'";
                        $result2 = mysql_query($sql2,$conn);
                        echo '<h2 >Maintenance</h2>
						<span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
								<span>&nbsp;Last name</span><br/>';
								$j = 0;
								while($row2 = mysql_fetch_array($result2)){
									$id = $row2['ID'];
									$fname= $row2['first_name'];
									$lname = $row2['last_name'];
									echo '<input type="text" id="mn_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="mn_'.$j.'_first" disabled="disabled"  style="width:23%;margin-top:10px" name="first" value="'.$fname.'"/>
									<input type="text" id="mn_'.$j.'_last" disabled="disabled" style="width:30%;margin-top:10px" name="last" value="'.$lname.'"/><button id= "mn_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button><br/>';
								$j = $j + 1;
								}
								?>
                            </div>
                             <div class="grid_99" style="font-size:11px; width:33.33% ">
							 <?php
							 $sql2="SELECT * FROM login WHERE designation = 'maid'";
								$result2 = mysql_query($sql2,$conn);
								echo ' <h2 >Maid</h2>
								<span>First name &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
								<span>&nbsp;Last name</span><br/>';
								$j = 0;
								while($row2 = mysql_fetch_array($result2)){
									$id = $row2['ID'];
									$fname= $row2['first_name'];
									$lname = $row2['last_name'];
									echo '<input type="text" id="md_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
									<input type="text" id="md_'.$j.'_first" disabled="disabled"  style="width:23%;margin-top:10px" name="first" value="'.$fname.'"/>
									<input type="text" id="md_'.$j.'_last" disabled="disabled" style="width:30%;margin-top:10px" name="last" value="'.$lname.'"/><button id= "md_'.$j.'" name="Edit" style="margin-left:1px;margin-top:10px">Edit</button><br/>';
								$j = $j + 1;
								}
								?>
								
                  </div>
            </div>
  </div>
                    
 
              </body></html>