<?php
include('connect.php');
session_start();
if ($_SESSION['username'] != 'admin'){
	
}else{
	header("Location: index.php");
}
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$director=$_POST['Director'];
	$genre=$_POST['genre'];
	$stars=$_POST['stars'];
	$sypnopsis=$_POST['sypnopsis'];
	$user=$_SESSION['username'];

	$query="insert into movie (Title,Director,Genre,Stars,Synopsis,username) values ('$title','$director','$genre','$stars','$sypnopsis','$user');";
	
	$hasil=mysql_query($query);
	if($hasil == 1 ){
		echo "<div class='alert alert-info'> Successfully Saved. </div>";
	}
		
	
}

//$query = "select Title, Director, Genre, Stars, Synopsis from movie ;"
?>


<html>
<head>
<title>client page</title>
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
		$.ajax({
		url : 'getdata.php',
		data: "", 
		dataType: 'json',
		success: function(data)  
			{
				$.each(data, function(key, val) {
				var tr=$('<tr></tr>');
				$.each(val, function(k, v){
				$('<td>'+v+'</td>').appendTo(tr);
				});
				tr.appendTo('#display');
				});
				
			}
		});
		});
		
	});
</script>
</head>
<body>
	<div class="nav" style="background-color: #c6e2ff";>
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
		<h1>Movie  </h1>
		<form action="" method="POST">
			<label> Title </label>
				<input type="text" placeholder="title" class="input-medium" name="title" />
			<label> Director </label>
				<input type="text" placeholder="Director" class="input-medium" name="Director" />
			<label> Genre : </label>
				<select class="span2" name="genre">
					<option value="Action Films">Action Films</option>
					<option value="Comedy Films">Comedy Films</option>
					<option value="Crime & Gangster Films">Crime & Gangster Films</option>
					<option value="Animated Films">Animated Films</option>

				</select>
			<label> Stars </label>
				<textarea class="span7" name="stars"></textarea>
			<label> Synopsis </label>
				<textarea class="span7" name="sypnopsis"></textarea>
			<br>	
			<input type="submit" name="submit" value="Create New review" class="btn btn-info" />	

		</form> 
	

	
	</div>
<div id="right"> <h3>Movie Review List  </h3>
	<button type="button" id="button" name="button">Refresh </button>
	
	<table border='1' id="display">
		<thead>
			<th>no</th>
			<th>title</th>
			<th>director</th>
			<th>genre</th>
			<th>stars</th>
			<th>sypnopsis</th>
			<th>user</th>
		</thead>
	
	</table>
	
	
		


</div>

</div>


</body>
</html>