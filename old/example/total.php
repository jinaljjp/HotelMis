<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
						$(function() {
						
						var input= ""; //holds current input as a string
					var input1= ""; var input2= ""; var input3= ""; var input4= ""; var input5= ""; var input6= ""; var input7= "";
						
						
						$("#cash1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input.length > 0 ) {
								input = input.slice(0,input.length-1); //remove last digit
								$(this).val(formatNumber(input));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input",function(){});
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
						$("#visa1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input1.length > 0 ) {
								input1 = input1.slice(0,input1.length-1); //remove last digit
								$(this).val(formatNumber(input1));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input1",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input1 += key; //add actual digit to the input string
									$(this).val(formatNumber(input1)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#masters1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input2.length > 0 ) {
								input2 = input.slice(0,input2.length-1); //remove last digit
								$(this).val(formatNumber(input2));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input2",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input2 += key; //add actual digit to the input string
									$(this).val(formatNumber(input2)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#ame_ex1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input3.length > 0 ) {
								input3 = input3.slice(0,input3.length-1); //remove last digit
								$(this).val(formatNumber(input3));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input3",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input3 += key; //add actual digit to the input3 string
									$(this).val(formatNumber(input3)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#disc1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input4.length > 0 ) {
								input4 = input4.slice(0,input4.length-1); //remove last digit
								$(this).val(formatNumber(input4));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input4",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input4 += key; //add actual digit to the input4 string
									$(this).val(formatNumber(input4)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#cheque1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input5.length > 0 ) {
								input5 = input5.slice(0,input5.length-1); //remove last digit
								$(this).val(formatNumber(input5));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input5",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input5 += key; //add actual digit to the input5 string
									$(this).val(formatNumber(input5)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});
						$("#expedia1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input6.length > 0 ) {
								input6 = input6.slice(0,input6.length-1); //remove last digit
								$(this).val(formatNumber(input6));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input6",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input6 += key; //add actual digit to the input6 string
									$(this).val(formatNumber(input6)); //format input string and set the input box value to it
								}
								
							}
							return false;
						});$("#other1").keydown(function(e) {     
							//handle backspace key
							if(e.keyCode == 8 && input7.length > 0 ) {
								input7 = input7.slice(0,input7.length-1); //remove last digit
								$(this).val(formatNumber(input7));
							}
						    else if(e.keyCode == 9 || e.keyCode == 116){
						 		  $(document).on("focusout",".class input7",function(){});
							}
							
							else {
								var key = getKeyValue(e.keyCode);
								if(key) {
									input7 += key; //add actual digit to the input7 string
									$(this).val(formatNumber(input7)); //format input string and set the input box value to it
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
							</script>
                           
</head>

                            <body>
                            <div class="box">
                            <form method="post" id="myform"  >
							<p>
                            	<strong>Cash:</strong> <input type="text" id="cash1"   /> <br/>
                       			<strong>Visa:</strong> <input type="text" id="visa1" />
                                <strong>Master Card:</strong> <input type="text" id="masters1"  />
                                <strong>American Express: </strong><input type="text" id="ame_ex1"  />
                        		<strong>Discovery:</strong> <input type="text" id="disc1"   />
                                <strong>Expedia:</strong> <input type="text" id="expedia1" />
                        		<strong>Cheque:</strong> <input type="text" id="cheque1" />
                        		<strong>Other:</strong><br /><input type="text" id="other1" >
                        		<br/>
                       			<strong>Total:</strong><input type="text" id="total1" name="total" disabled="disabled" />
                        
                        		
							</p>

						</form>
                        </div>
</body>
</html>