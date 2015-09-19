
var ajaxRequest;

function create_ajax_request(method, url, data, on_success, on_fail) {

	if (window.XMLHttpRequest) {
		ajaxRequest = new XMLHttpRequest();
	} else {
		ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}

	ajaxRequest.onreadystatechange = function(){

		if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
			var response = ajaxRequest.responseText;
			on_success(response);
		} else if (ajaxRequest.readyState == 4) {
			on_fail();
		}

	};

	ajaxRequest.open(method, url, true);
	ajaxRequest.send(data);
}