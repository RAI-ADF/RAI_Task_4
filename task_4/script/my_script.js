$("#submit").click( function() {
 
	if( $("#username").val() == "" || $("#password").val() == "" )
	  $("#ack").html("Username/password are mandatory fields -- Please Enter.");
	else
	  $.post( $("#myForm").attr("action"),
	         $("#myForm :input").serializeArray(),
			 function(info) {
			   $("#ack").empty();
			   $("#ack").html(info);
			 });
 
	$("#myForm").submit( function() {
	   return false;	
	});
});
 
function clear() {
 
	$("#myForm :input").each( function() {
	      $(this).val("");
	});
 
}