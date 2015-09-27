<?php
	require('_authenticateUser.php');
	include '_connection.php';

	$sql = "SELECT * from todo where userid={$_COOKIE['userid']}";
	//echo "$sql";;
	$res = $conn->query($sql);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		    $(window).load(function(){
		        $.getJSON("_todoJson.php", function(result){
		        	var x = 0;
		            $.each(result, function(i, field){
		            	if(x!=0){
		                	$("#table").append("<tr>"+ "<td>" + x + "</td>" + "<td>" + field.task + "</td>" +"<td>" + field.dates + "<td>" + field.time + "</td>" +"</td>" +"</tr>");
		                }
		                //$("#table").append("ok");
		                x++;
		            });
		        });
		    });
		});
	</script>
</head>
<body>
	<?php include 'layout/header.php'; ?>
	<div class="content">
		<h1>to do list</h1>
		<div>
			<table>
				<thead>
					<tr>
						<td>no</td>
						<td>task</td>	
						<td>date</td>
						<td>time</td>
					</tr>
				</thead>
				<tbody id="table">
					
				</tbody>
				<!--
				<tbody>
					<?php
						$i=1;
						while ($row = $res->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo "$i"; ?></td>
						<td><?php echo $row['task']; ?></td>
						<td><?php echo $row['dates']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><a <?php echo "href='_deleteTodo.php?id={$row['id']}'"; ?>>delete</a></td>
						<td><a <?php echo "href='editTodo.php?id={$row['id']}'"; ?>>edit</a></td>
					</tr>
					<?php		
						$i++;}
					?>
				</tbody>
				-->
			</table>
		</div>
	</div>
	
</body>
</html>
