<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="login.css"/>
<script type="text/javascript" src="login.js"></script>
</head>
<body>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="admin(viewdata).php">View Data</a></li>
        <li class="tab active"><a href="admin(viewuser).php">View User</a></li>
      </ul>
      
        <div id="viewuser">   
          <h1>View User</h1>
          
          <?php
	if(!mysql_connect("127.0.0.1","root",""))
	{
     die('oops connection problem ! --> '.mysql_error());
	}
	if(!mysql_select_db("db_task4"))
	{
     die('oops database selection problem ! --> '.mysql_error());
	}

	$tampil = mysql_query("SELECT * FROM registrasi  ORDER BY username");
		echo "<table class='list'><thead>
          <tr>
          <td class='left'>username</td>
          <td class='left'>password</td>
          <td class='left'>email</td>
		  <td class='left'>Tempat </td>
		  <td class='left'>Tgl.Lahir</td>
          <td class='left'>level</td>
          </tr></thead><tbody>";
		  echo " <h2>Data User</h2>";
		   while ($r=mysql_fetch_array($tampil)){
       echo "  <tr><td class='left'>$r[username]</td>
             <td class='left'>$r[name]</td>
		         <td class='left'><a href=mailto:$r[email]>$r[email]</a></td>
				 <td class='left'>$r[place]</td>
				  <td class='left'>$r[date]</td>
				 <td class='left'>$r[leveluser]</td></tr>";
				 }
?>
	
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>
</html>