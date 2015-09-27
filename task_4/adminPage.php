<?php
	require('_authenticateAdmin.php');
	include '_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript">
		var ajaxRequest = new XMLHttpRequest();
		function ajaxFunctionLoadUser(){	
			ajaxRequest.onreadystatechange = processQueryLoadUser;

			ajaxRequest.open("GET", "_all_user_data.php");
			ajaxRequest.send();
		}

		function processQueryLoadUser(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				document.getElementById('allUser').innerHTML = ajaxRequest.responseText;
			}
		}

		function viewDetail(id){
			//alert(id);
			ajaxRequest.onreadystatechange = viewDetailProcess;

			ajaxRequest.open("GET", "_userDetail.php?id="+id);
			ajaxRequest.send();
		}

		function viewDetailProcess(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				document.getElementById('user-detail').innerHTML=ajaxRequest.responseText;
			}
		}

		function closeDetail(){
			//alert("ok");
			document.getElementById('user-detail').innerHTML="";
		}

		function searchUser(){
			var username = document.getElementById('username-search').value;

			ajaxRequest.onreadystatechange = searchProcess;

			ajaxRequest.open("GET", "_searchUser.php?username="+username);
			ajaxRequest.send();
		}

		function searchProcess(){
			if(ajaxRequest.readyState==4){
				//alert(ajaxRequest.responseText);
				if(ajaxRequest.responseText==0){
					document.getElementById('user-detail').innerHTML="user not found";
				}else{
					document.getElementById('user-detail').innerHTML=ajaxRequest.responseText;
				}
			}
		}
	</script>
</head>
<body onload="ajaxFunctionLoadUser();">
	<?php include 'layout/header.php'; ?>
	<div class="content">
		<h1>Admin Page</h1>
		<div>
			<div style="float: left;">
				<table>
					<thead>
						<tr>
							<td>no</td>
							<td>username</td>
							<td>task</td>
							<td>date</td>
							<td>time</td>
						</tr>
					</thead>
					<tbody>
						<?php
							$i=1;
							$sql = "select * from todo join user on(todo.userid=user.id)";
							$res = $conn->query($sql);
							if($res->num_rows>0){
								while ($row=$res->fetch_assoc()) {
						?>
							<tr>
								<td><?php echo "$i"; ?></td>
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['task']; ?></td>
								<td><?php echo $row['dates']; ?></td>
								<td><?php echo $row['time']; ?></td>
							</tr>
						<?php
								$i++;
								}
							}
						?>
					</tbody>
				</table>
			</div>
			<div style="margin-left: 750px;">
				<div>
					<input id="username-search" type="text" placeholder="input username"><button onclick="searchUser()">search</button>
				</div>
				<div id="user-detail" class="user-detail"></div>
				<table>
					<thead>
						<tr>
							<td>no</td>
							<td>username</td>
							<!--
							<td>name</td>
							<td>email</td>
							<td>level</td>
							<td>birth place</td>
							<td>birth date</td>
							<td>option</td>
							-->
						</tr>
					</thead>
					<!--
					<tbody>
						<?php
							$i=1;
							$sql = "select * from user";
							$res = $conn->query($sql);
							if($res->num_rows>0){
								while ($row=$res->fetch_assoc()) {
						?>
						<tr>
							<td><?php echo "$i"; ?></td>
							<td><?php echo $row['username']; ?></td>
							
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['level']; ?></td>
							<td><?php echo $row['birth_place']; ?></td>
							<td><?php echo $row['birth_date']; ?></td>
							<td><a <?php echo "href='_deleteUser.php?id={$row['id']}'"; ?>>delete</a></td>
							
						</tr>
						<?php
								$i++;}
							}

						?>
					</tbody>
					-->
					<tbody id="allUser">
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
