$(document).ready(function(){  
$("#add1").click(function(){
var cash1 = $("#cash1").val();
var ame_ex1 = $("#ame_ex1").val();
var disc1 = $("#disc1").val();
var visa1 = $("#visa1").val();
var master1 = $("#masters1").val();
var cheque1 = $("#cheque1").val();
var expedia1 = $("#expedia1").val();
var other1 = $("#other1").val();
var note1 = $("#note1").val();
//var total1 = $("#total1").val();

// Returns successful data submission message when the entered information is stored in database.
	$.post("insert.php",{ cash: cash1, ame_ex: ame_ex1, disc: disc1, visa: visa1, masters: master1, cheque: cheque1, expedia: expedia1, other: other1,		 note: note1},
			function() {});
    
  
	});
});