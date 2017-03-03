<?php
session_start();
$user_check=$_SESSION['login_user'];
//$u_id = $_SESSION['user_id'];
$caregory = $_SESSION['category'];

date_default_timezone_set('America/Los_Angeles');

?>
<!DOCTYPE html>
<!--[if gt IE 8]>
	<!--><html style="background-color: rgb(250, 250, 250); background-image: 'ng-app='FormCrafts"><!--<![endif]-->
	<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>My Project</title>
		<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="../css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if IE]><![if gte IE 6]><![endif]
		<script src="js/glow/1.7.0/core/core.js" type="text/javascript"></script>
		<script src="js/glow/1.7.0/widgets/widgets.js" type="text/javascript"></script>
		<link href="js/glow/1.7.0/widgets/widgets.css" type="text/css" rel="stylesheet" />-->

		<link rel="stylesheet" href="form.build.min.css">

		
		
		</head>
   <?php 
$bid=$_GET['id'];
$conn=mysql_connect('localhost','root','') or die(mysql_errno());
$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
$sql="SELECT * FROM out_of_order WHERE Id='$bid'";
$result=mysql_query($sql,$conn);

while($fetch=mysql_fetch_array($result, MYSQL_ASSOC)){
	$room=$fetch["room_no"];
	$order1=$fetch["out_of_order"];
	$reason_order1 = $fetch['reason_order'];
	$comments_order1 = $fetch['comment_order'];
	$reason1 = $fetch['reason'];
	$comments1 = $fetch['comments'];
}
?>
<?php
if(isset($_POST['submit']))
{
	$room = $_POST['field10'];
	$order = $_POST['field22'];
	$reason_order = $_POST['field15'];
	$comments_order = $_POST['field16'];
	$reason = $_POST['field17'];
	$comments = $_POST['field18'];
	if($order== "Yes"){
	$sql="UPDATE out_of_order SET room_no= '$room', out_of_order ='$order', reason_order='$reason_order', comment_order='$comments_order',date = NOW(), time = NOW(), user_id = '".$u_id."'  WHERE Id='$bid' ";
	}
	else{
	$sql="UPDATE out_of_order SET room_no= '$room', out_of_order ='$order', reason='$reason', comments='$comments', date = NOW(), time = NOW(), user_id = '".$u_id."'  WHERE Id='$bid' ";
	}
	
	
	$result=mysql_query($sql,$conn);
	if($result==1)
	  { 
echo "<script language='javascript' type='text/javascript'>document.location.href='maintenance.php';</script>";	  } 
}
?>  
		<body class="" >
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

            <h1 style="text-decoration:none">Maintenance</h1>
            
          </div>
		
		<ul id="navigation">
			
            <li><a href="maintenance.php">Maintenance</a></li>
			<li><a href="add_info.php">Settings</a></li>
           <li style="padding-left:480px"> Hi <?php
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
           
            
		</ul>
        <form name="Order" action="" method="post" id="order"> 
     
			
			
            <div class="formcrafts form-live iframe-inactive  center-align  no-img" style="margin: 0; width: 100%;">
         

				

			<ul class="form-page clearfix ng-scope ui-sortable" id="sortable0" index="0" sortable=""><!-- ngRepeat: element in Page -->
         
           
                 <h2 style="margin-left:37%;; border:none">My Form</h2>

                  
                       
                          
                          <!-- end ngRepeat: element in Page --><li style="list-style:none; margin-left:32%">  Room No#<br/><input type="text" name="field10" placeholder="" value="<?php echo $room; ?>"style="font-family: Helvetica, Arial; width:31%"> </li><!-- end ngRepeat: element in Page -->
                          <br/>
                          
                         <li style="list-style:none; margin-left:30%"> 
                  <div class="form-field absolute_" compile="element.element" ng-class='[+"absolute_"+element.elementDefaults.absolute]' ng-style="{width: element.elementDefaults.width, left: element.elementDefaults.x, top: element.elementDefaults.y, color: Styling.theme.fontColor}" style="color: rgb(106, 106, 106); margin-left:3%">
                  <div class="label_cover  has-sl">
                  <span class="label ng-binding">Out of Order</span></div>
                  <div class="input_cover"><div class="select-cover">
                  
                  <select name="field22"  style="font-family: Helvetica, Arial;width:31%"><!-- ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <?php
				  if($order1=='Yes'){
					  echo	"<option name='Yes' value='Yes' >Yes</option>";
					   echo	"<option name='No' value='No' >No</option>"; 
					   
				  }
				  else{
					    echo	"<option name='No' value='No' >No</option>";
					    echo	"<option name='Yes' value='Yes' >Yes</option>";
				  }
				   ?>
                    
                  
                  </select>
                     
                  
                  </div><span class="input-addon"  style="color: rgb(143, 143, 143);"><i class="icon-angle-down"></i></span><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i><div  class="error-message field22"><i tooltip="" title=""  class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i></div></div></div>
                          </li><!-- end ngRepeat: element in Page -->
                         
                          <li class="form-element ng-scope  -parent parent-absolute_ field15-li hidden-element required-" ng-repeat="element in Page" ng-class='[element.show_options, element.elementDefaults.elementType+"-parent", +"parent-absolute_"+element.elementDefaults.absolute, element.elementAttr.identifier+"-li", element.elementClasses.hidden,element.elementAttr.layout, Styling.requiredAsterix+"-"+element.elementAttr.required]' ng-style="{width: element.elementAttr.width}" animate="" data-index="3" data-field="field15" style="width: 100%; ">
                               
                  <div class="form-field absolute_" compile="element.element" ng-class='[+"absolute_"+element.elementDefaults.absolute]' ng-style="{width: element.elementDefaults.width, left: element.elementDefaults.x, top: element.elementDefaults.y, color: Styling.theme.fontColor}" style="color: rgb(106, 106, 106);"><label class="dropdown-cover ng-scope"><div class="label_cover  no-sl"><span class="label ng-binding">Reason(out of order)</span><span class="sub_label ng-binding"></span></div><div class="input_cover"><div class="select-cover">
                  
                  <select name="field15"  style="font-family:  Helvetica, Arial;  width:33%"><!-- ngRepeat: opt in element.elementDefaults.options_list_show -->
                  
                  <option  value="" class="ng-binding ng-scope">Select Option</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <option  value="Option A" class="ng-binding ng-scope">Option A</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <option value="Option B" class="ng-binding ng-scope">Option B</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  </select>
                  </div>
                  <span class="input-addon" ng-style="{color: Styling.theme.iconColor}" style="color: rgb(143, 143, 143);"><i class="icon-angle-down"></i></span><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i><div ng-class="element.elementAttr.identifier" class="error-message field15"><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i></div></div></label></div>

                  
                          </li><!-- end ngRepeat: element in Page -->
                         
                          <li class="form-element ng-scope  -parent parent-absolute_ field16-li hidden-element required-" ng-repeat="element in Page" ng-class='[element.show_options, element.elementDefaults.elementType+"-parent", +"parent-absolute_"+element.elementDefaults.absolute, element.elementAttr.identifier+"-li", element.elementClasses.hidden,element.elementAttr.layout, Styling.requiredAsterix+"-"+element.elementAttr.required]' ng-style="{width: element.elementAttr.width}" animate="" data-index="4" data-field="field16" style="width: 100%;">
                               
                  <div class="form-field absolute_" compile="element.element" ng-class='[+"absolute_"+element.elementDefaults.absolute]' ng-style="{width: element.elementDefaults.width, left: element.elementDefaults.x, top: element.elementDefaults.y, color: Styling.theme.fontColor}" style="color: rgb(106, 106, 106);"><label class="multi-line-text-cover ng-scope"><div class="label_cover  no-sl"><span class="label ng-binding">Comments(out of order)</span><span class="sub_label ng-binding"></span></div><div class="input_cover"> 
                  <textarea name="field16" placeholder="" class="growComments" onkeyup="growComments(this)" rows="3" ng-style="{fontFamily: Styling.theme.inputFont}" style="font-family: Helvetica, Arial; width:33%"></textarea>
                  
                  <i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i><div ng-class="element.elementAttr.identifier" class="error-message field16"><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i></div></div></label></div>

                          </li><!-- end ngRepeat: element in Page -->
                          
                          <li class="form-element ng-scope  -parent parent-absolute_ field17-li " ng-repeat="element in Page" ng-class='[element.show_options, element.elementDefaults.elementType+"-parent", +"parent-absolute_"+element.elementDefaults.absolute, element.elementAttr.identifier+"-li", element.elementClasses.hidden,element.elementAttr.layout, Styling.requiredAsterix+"-"+element.elementAttr.required]' ng-style="{width: element.elementAttr.width}" animate="" data-index="5" data-field="field17" style="width: 100%;">
                               
                  <div class="form-field absolute_" compile="element.element" ng-class='[+"absolute_"+element.elementDefaults.absolute]' ng-style="{width: element.elementDefaults.width, left: element.elementDefaults.x, top: element.elementDefaults.y, color: Styling.theme.fontColor}" style="color: rgb(106, 106, 106);"><label class="dropdown-cover ng-scope"><div class="label_cover  no-sl"><span class="label ng-binding">Reason</span><span class="sub_label ng-binding"></span></div><div class="input_cover"><div class="select-cover">
                  
                  <select name="field17" style="font-family: Helvetica, Arial;width:33%"><!-- ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <option value="" class="ng-binding ng-scope">Select option</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <option value="Option A" class="ng-binding ng-scope">Option A</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  <option  value="Option B" class="ng-binding ng-scope">Option B</option><!-- end ngRepeat: opt in element.elementDefaults.options_list_show -->
                  </select>
                  
                  </div><span class="input-addon" ng-style="{color: Styling.theme.iconColor}" style="color: rgb(143, 143, 143);"><i class="icon-angle-down"></i></span><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i><div ng-class="element.elementAttr.identifier" class="error-message field17"><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i></div></div></label></div>

                  
                          </li><!-- end ngRepeat: element in Page --><li class="form-element ng-scope  -parent parent-absolute_ field18-li " ng-repeat="element in Page" ng-class='[element.show_options, element.elementDefaults.elementType+"-parent", +"parent-absolute_"+element.elementDefaults.absolute, element.elementAttr.identifier+"-li", element.elementClasses.hidden,element.elementAttr.layout, Styling.requiredAsterix+"-"+element.elementAttr.required]' ng-style="{width: element.elementAttr.width}" animate="" data-index="6" data-field="field18" style="width: 100%;">
                               
                  <div class="form-field absolute_" compile="element.element" ng-class='[+"absolute_"+element.elementDefaults.absolute]' ng-style="{width: element.elementDefaults.width, left: element.elementDefaults.x, top: element.elementDefaults.y, color: Styling.theme.fontColor}" style="color: rgb(106, 106, 106);"><label class="multi-line-text-cover ng-scope"><div class="label_cover  no-sl"><span class="label ng-binding">Comments</span><span class="sub_label ng-binding"></span></div><div class="input_cover">
                  <textarea name="field18" placeholder="" class="growComments" onkeyup="growComments(this)" rows="3"  style="font-family: Helvetica, Arial; width:33%"></textarea>
                  <i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i><div ng-class="element.elementAttr.identifier" class="error-message field18"><i tooltip="" title="" ng-style="{color: Styling.theme.iconColor}" class="tooltip-q icon-help-circled ng-scope" data-original-title="" style="display: none; color: rgb(143, 143, 143);"></i></div></div></label></div>

                  
                          </li><!-- end ngRepeat: element in Page -->
                          <li style="list-style:none; margin-left:42%; margin-top:1%">
                               
                 <input type="submit" value="submit" name="submit">

                  
                          </li>
                          
                        </ul>
                     
                       
                        
                        </div><!--end ngRepeat: Page in FormElements.Main -->
                        
             
			
                </form>
                			
		    <script src="jquery-1.10.2.min.js"></script>
			<script src="form.min.js"></script>



						


			<script>

				window.referrerURL = document.URL;
				window.isInIframe = "";

			</script>


			

<script> window.FormCraftLogic = [{"conditions":[{"fieldId":"field22","operator":"is","compareWith":"Yes"},[]],"events":[{"action":"show","actionTo":"field15"},{"action":"show","actionTo":"field16"},{"action":"hide","actionTo":"field17"},{"action":"hide","actionTo":"field18"}]},{"conditions":[{"fieldId":"field22","operator":"is","compareWith":"No"},[]],"events":[{"action":"show","actionTo":"field17"},{"action":"show","actionTo":"field18"},{"action":"hide","actionTo":"field15"},{"action":"hide","actionTo":"field16"}]}];</script>
 
              </body></html>