<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>View Data</title>
		<link rel="stylesheet" href="adminLoad.css">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>							
			function myCall() {
					var request = $.ajax({
						url: "ajaxLoad.php",
						type: "POST",			
						dataType: "html"
					});

					request.done(function(msg) {
						$("#mybox").html(msg);			
					});

					request.fail(function(jqXHR, textStatus) {
						alert( "Request failed: " + textStatus );
					});
				}
			
		</script>
        <script src="jquery-1.9.0.min.js"></script>
    	<script type="text/javascript">
			function fetchfromMysqlDatabase() {
                  $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "ajaxLoad.php",
                    cache: false,
                    beforeSend: function() {
                       $('#recsql').html('loading please wait...');
                    },
                    success: function(htmldata) {
                       $('#recsql').html(htmldata);
                    }
                  });
                }
    </script>
	</head>
	<body>
    <div id='cssmenu'>
    <ul>
       <li><a href='adminPage.php'><span>Home</span></a></li>
       <li class='has-sub'><a href='#'><span>Data</span></a>
          <ul>
             <li class='has-sub'><a href='adminSearch.php'><span>View User</span></a>
             </li>
             <li class='has-sub'><a href='adminLoad.php'><span>View Data</span></a>
             </li>
          </ul>
       </li>
       <li><a href='logout.php'><span>Log Out</span></a></li>
    </ul>
    </div><br><br>
    <center>
    	<div style="margin-top:150px">
		<div id="mybox">
        
        <article>
          <table class="bordered">
            <tr>
              <tr>
				<td width="620px" margin-bottom:"100px" bgcolor="#333" align="center"><font color="white">D A T A B A S E</td></font>
			  </tr>
            <tr>
              <th><input type="button" onclick="fetchfromMysqlDatabase();" value="Load Data"</input></th>
            </tr>
            <tr>
              <td  width="100%" id="recsql"  style="text-align: left;vertical-align: middle;"></td>
            </tr>
          </table>
        </article>
        
        </div>
	</div>
    </br></br></br>
    <?
	$previous = "javascript:history.go(-1)";
		if(isset($_SERVER['HTTP_REFERER'])) {
    	$previous = $_SERVER['HTTP_REFERER'];
		}
	?>
    <a href="adminPage.php">H O M E</a>
    </center>
	</body>
</html>
