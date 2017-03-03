$(document).ready(function(){  
$("#undo").click(function(){
var o_id1 = $("#o_id").val();
var rooom1 = $("#room").val();
var order1 = $("#order").val();
var reason1 = $("#reason").val();
var comments1 = $("#comments").val();
// Returns successful data submission message when the entered information is stored in database.
	$.post("undo.php",{ o_id: o_id1, rooom: rooom1, order: order1, reason: reason1, comments: comments1},
			function() {});
    
  
	});
});