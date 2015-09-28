<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="login.css"/>
<script type="text/javascript" src="login.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    function showRoom(){
        $.ajax({
            type:"POST",
            url:"viewdata.php",
            data:{action:showroom},
            success:function(data){
                $("#content").html(data);
            }
        });
    }
    showRoom();
});
</script>
</head>
<body>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="admin(viewdata).php">View Data</a></li>
        <li class="tab"><a href="admin(viewuser).php">View User</a></li>
      </ul>
      
        <div id="viewdata">   
          <h1>View Data</h1>
    <?php
	if(!mysql_connect("127.0.0.1","root",""))
	{
     die('oops connection problem ! --> '.mysql_error());
	}
	if(!mysql_select_db("db_task4"))
	{
     die('oops database selection problem ! --> '.mysql_error());
	}

	$tampil = mysql_query("SELECT * FROM data  ORDER BY name");
		echo "<table class='list'><thead>
          <tr>
          <td class='left'>name</td>
          <td class='left'>deskripsi</td>
          </tr></thead><tbody>";
		  echo " <h2>List data Input</h2>";
		   while ($r=mysql_fetch_array($tampil)){
       echo " </tr><td class='left'>$r[name]</td>
             <td class='left'>$r[deskripsi]</td></tr>";
				 }
?>
          
	
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</body>
</html>