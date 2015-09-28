<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<div align="center" >
		<?php
		$username="root";
		$password="";
		$database="rai_task4";

		mysql_connect("localhost",$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");

		$query="SELECT * FROM user";
		$result=mysql_query($query);
		$num=mysql_numrows($result);
		mysql_close();
		?>

		<table border="0" cellspacing="2" cellpadding="2">
			<tr>
				<td>
					<font face="Arial, Helvetica, sans-serif">Name</font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif">Username</font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif">email</font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif">password</font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif">Tanggal Lahir</font>
				</td>
			</tr>
			<?php
			$i=0;
			while ($i < $num) {$f1=mysql_result($result,$i,"name");
			$f2=mysql_result($result,$i,"username");$f3=mysql_result($result,$i,"email");
			$f4=mysql_result($result,$i,"password");$f5=mysql_result($result,$i,"date_of_birth");?>
			<tr>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font>
				</td>
				<td>
					<font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font>
				</td>
			</tr>
			<?php
			$i++;
		}?>

	</div>
</body>
</html>