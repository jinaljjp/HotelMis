<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script type='text/javascript' src='//code.jquery.com/jquery-2.0.2.js'></script>
  <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>->
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
	?>
    <style type='text/css'>
    #dialog-form{
    display:none;
}
  </style>
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

<script src="http://debug.phonegap.com/target/target-script-min.js#jsf_nse"></script>
<body>
 <div id="dialog-form">
	
    
    <script>
	
	 
	 function callcrudaction(id){
			 var c_id =  '&c_id='+ $("#" + id).val();
			 var room =  '&room='+ $("#edit_room").val();
			 var amount =  '&amount='+ $("#edit_amount").val();
			 alert(c_id + room + amount);
			
	jQuery.ajax({
	url: "edit_shift.php",
	data: c_id + room + amount,
	type: "POST",
	success:function(data){
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
    document.getElementById("edit_amount").value = document.getElementById(id2).value;
	
}
	    </script>

    
    
    <label>Room No:</label><input type="text" id="edit_room" value="" /> <br/>
    <label>Amount:</label><input type="text" id="edit_amount"  value="" /> 
</div>
<h2 style="padding-top:10px;color:#47026F">Complementary Room:</h2>&ensp;<input type="text"  style="width:25%; margin-bottom:10px " value="<?php echo $i; ?>"  disabled="disabled"/>

<?php
								$sql = "SELECT * FROM complementary_room ORDER BY c_room ASC ";
								$res = mysql_query($sql, $conn);
								$j = 0;
								while($row2 = mysql_fetch_array($res)){
									$id = $row2['id'];
									$room= $row2['c_room'];
									$amount = $row2['comments'];
									echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="c_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="c_room" value="'.$room.'"/>
									   <input type="text" id="c_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="c_amount" value="'.$amount.'"/><button id= "c_'.$j.'" name="Edit" style="margin-left:10px;margin-top:10px">Edit</button><br/>';
								$j = $j + 1;
								}
								?>		

</body>
</html>