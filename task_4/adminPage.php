<?php
include('connect.php');
session_start();
if($_SESSION['username'] == 'admin'){
//	echo "this is admin page";
//	echo "<br/>";
//	echo "welcome ";
//	echo @$_SESSION['username'];

}else{
	header("Location: index.php");
}


	
	
?>
<html>
<head>
<title> admin page</title>
<link href="asset/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="asset/jquery-1.11.3.min.js"></script>
<style>
#left, #right {
margin-left: 2cm;
 float: left;
}

.nav a {
  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  padding: 14px 10px;
  text-transform: uppercase;
}

.nav li {
  display: inline;
   
}
</style>
<script>
$(document).ready(function(){

	$("#button").click(function(){
		user=$("#user").val();
		console.log(user);
		$.ajax({
		type: "POST",
		url : 'getuser.php',
		data: "user="+user, 
		success: function(data)  
			{
				//document.hasil.text.value=html;
				$("#user").html("hello world");
			}
		});
	});
});
</script>

</head>
<body>
	<div class="nav" style="background-color: #c6e2ff"; >
      <div class="container">
        <ul class="pull-left">
          <li>welcome <? echo @$_SESSION['username'];?></?></li>
        </ul>
        <ul class="pull-right">
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
	
	<div id="wrapper"> 
		<div id="left"> 
		<div id="right"> <h3>User search  </h3>
		<label> Search user </label>
		<input type="text" id="user" placeholder="input username" class="input-medium" name="user" />
		</br>
		<button type="button" id="button" name="button">Refresh </button>
		</br>
		<input type="text" id="hasil"  class="input-medium" name="hasil" readonly=""/>
		</div>
		<div id="right"> 
			<div id="right"> <h3>User List  </h3>
			<table border="1px">
				<thead>
					<th>user</th>
				</thead>
				<tbody>
					<?php 
						$query="select username from user";
						$hasil=mysql_query($query);
						while($data = mysql_fetch_object($hasil) ):
					?>
					<tr>
                  <td><?php echo $data->username ?></td>
				  <?php
				endwhile;
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>