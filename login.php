<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
function validLogin(){
      var uname=$('#uname').val();
      var password=$('#password').val();

      var dataString = 'uname='+ uname + '&password='+ password;
      $("#flash").show();
      $("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
      $.ajax({
      type: "POST",
      url: "processed.php",
      data: dataString,
      cache: false,
      success: function(result){
               var result=trim(result);
               $("#flash").hide();
               if(result=='correct'){
                     window.location='index.php';
               }else{
                     $("#errorMessage").html(result);
               }
      }
      });
}

function trim(str){
     var str=str.replace(/^\s+|\s+$/,'');
     return str;
}
</script>
</head>
<style type="text/css">
#cv {
  background : gray;
  height : auto;
  width : 500px;
  margin : 0px auto;
  border : 2px solid black;
  border-collapse: collapse;
  text-align : center;
}

</style>
<body>
<div id="cv">
<?php include_once("menu.php"); ?>

    Username : <br><input type="text" id="uname" name="username"></br>
    Password : <br><input id="password" type="password" name="password"></br>
    <br/><input type="submit" value="submit" style="margin-bottom:5px;" onclick="validLogin()">
    <button type="reset" value="reset">Reset</button>

</div>
</body>
</html>
