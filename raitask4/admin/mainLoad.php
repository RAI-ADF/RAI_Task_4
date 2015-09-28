<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>My jQuery Ajax test</title>
		<style type="text/css">
			#container {
   				min-height:100%;
   				position:relative;
			}
			html {
 				width: 100% ;
  				height: 100% ;
  				background: radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  				background: -moz-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  				background: -webkit-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
			}		
			#mybox {
				width: 550px;
				height: relative;
				border: 1px solid #999;
			}

			body {
				font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			}

			button {
				background-color: #009688;
				color: white;
			}
			input[type=button] {
				width:543px;
				background-color:#009688;
				color:#fff;
				border:2px solid #009688;
				padding:8px;
				font-size:13px;
				cursor:pointer;
				margin-bottom:2px;
				margin-top:8px
			}
			a {
				text-decoration: none;
				color:black;
			}
		</style>
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
    <center>
    	<div style="margin-top:150px">
		<div id="mybox">
        
        <article>
          <table class="bordered">
            <tr>
              <tr>
				<td width="550px" margin-bottom:"100px" bgcolor="#333" align="center"><font color="white">D A T A B A S E</td></font>
			  </tr>
            <tr>
              <th><input type="button" onclick="fetchfromMysqlDatabase();" value="Load Data"</input></th>
            </tr>
            <tr>
              <td  width="33%" id="recsql"  style="text-align: left;vertical-align: middle;"></td>
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
    <a href="<?= $previous ?>">H O M E</a>
    </center>
	</body>
</html>
