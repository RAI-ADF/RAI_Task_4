<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-color: #009688;
	}
	table{
		color:#fff;		
	}

</style>
</head>
<body>

<?php
	//session_start();
	//echo "Hi " . $_SESSION["username"] . ".<br>";


?>
	<div align="center">
		<button name="showUser" onclick="showUser()">Show All</button>
		<br><br>
		<div id="txtHint"><b>Your item will be listed here...</b></div>
		<br><br><br><br>
		
	</div>

</body>
<script>
function showUser() {
     
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","LoadDataUserPage.php?q=null",true);
        xmlhttp.send();
    
}

function showUserByName() {
	str = document.getElementById("search").value;
     if (str == "") {
        document.getElementById("txtHint2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","LoadDataUser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</html>