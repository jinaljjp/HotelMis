
var ajax = getHTTPObject();
function getHTTPObject()
{
	var xmlhttp;
	if (window.XMLHttpRequest) {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	} else if (window.ActiveXObject) {
	  // code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	} else {
	  //alert("Your browser does not support XMLHTTP!");
	}
	return xmlhttp;
}

function updateCityState()
{
	if (ajax)
	{
		var zipValue = document.getElementById("zipcode").value;
		if(zipValue)
		{
			var url = "ckeck_in.php";
			var param = "?zip=" + escape(zipValue);

			ajax.open("GET", url + param, true);
			ajax.onreadystatechange = handleAjax;
			ajax.send(null);
		}
	}
}
function handleAjax()
{
	if (ajax.readyState == 4)
	{
		citystatearr = ajax.responseText.split(",");

		var city = document.getElementById('city');
		var state = document.getElementById('state');

		city.value = citystatearr[0];
		state.value = citystatearr[1];
	}
}
