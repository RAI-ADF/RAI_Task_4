var xmlhttp;
function create_ajax_request(method, url, data, on_success, on_fail){
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			var response = xmlhttp.responseText;
			on_success(response);	
		} else if (xmlhttp.readyState==4) {
			on_fail();
		}
		
	};
	xmlhttp.open(method,url,true);
	xmlhttp.send(data);
}