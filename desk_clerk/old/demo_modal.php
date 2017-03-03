<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/run_prettify.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/js/bootstrap-dialog.min.js"></script>
<meta charset="utf-8" />
<!--tabs-->
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--tabs end-->
<title>BootstrapDialog examples</title>
<style>
    .login-dialog .modal-dialog {
        width: 100px;
    }
</style>
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
    border: solid 20px #d2f4e9; }
    ul#tab li.active {
      display: block; }
    ul#tab li h2 {
      font-weight: 400;
      margin-bottom: 30px;
      padding-bottom: 5px;
      border-bottom: solid 5px #32c896; }

</style>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/tabs.js"></script>

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
  alert (button);
  alert (id);
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
</head>
<?php
		$conn=mysql_connect('localhost','root','') or die(mysql_errno());
		$db=mysql_select_db('workspace',$conn) or die('Database doesnot exist');
		
	?>
<body>
<div id="main">
    <div class="container">
        <ul id="tabs">
            <li class="active">Tab 1</li>
            <li>Tab 2</li>
        </ul>
        <ul id="tab">
            <li class="active">
                  <?php
								$sql = "SELECT * FROM shift_report WHERE type ='Cash' ORDER BY LENGTH(room_no), room_no ASC";
								$res = mysql_query($sql, $conn);
								$j = 0
								;
								while($row2 = mysql_fetch_array($res)){
									$id = $row2['id'];
									$room= $row2['room_no'];
									$amount = $row2['amount'];
									echo '<input type="text" id="c_'.$j.'_id" hidden="hidden" value="'.$id.'"/>
										<input type="text" id="c_'.$j.'_room" disabled="disabled"  style="width:23%;margin-top:10px" name="c_room" value="'.$room.'"/>
									   <input type="text" id="c_'.$j.'_amount" disabled="disabled" style="width:30%;margin-top:10px" name="c_amount" value="'.$amount.'"/><button type="button" id="c_'.$j.'" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Edit</button><br/>';
								$j = $j + 1;
								}
								?> 
       

            </li>
            <li>
                <h2>This is the second tab</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, fugit nobis qui temporibus culpa inventore consectetur aliquam. Unde, itaque, quos, laboriosam, reprehenderit ipsa deleniti sequi animi eveniet dolorem maiores alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, pariatur, laborum, sit molestiae eos itaque iste repudiandae eum aperiam ad sapiente dicta reprehenderit. Omnis culpa harum blanditiis voluptates explicabo quis?
            </li>
            
        </ul>
  </div>
  </div>

          


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
  
  <script>
  
  $(function() {
    
    var input = ""; //holds current input as a string
    
    $("#message-text").keydown(function(e) {     
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
  
  function callcrudaction(){
	  var room_no = document.getElementById('recipient-name').value;
	  alert (room_no);
	  var room_id = document.getElementById('recipient-id').value;
	  alert (room_id);
	   var amount = document.getElementById('message-text').value;
	   alert(amount);
			 var c_id =  '&c_id='+ $("#recipient-id").val();
			 var room =  '&room='+ $("#recipient-name").val();
			 var amount =  '&amount='+ $("#message-text").val();
			alert(c_id + room + amount);
			
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
      <button type="button" class="btn btn-primary" onClick="calldelete()">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="callcrudaction()">Save</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
