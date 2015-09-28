<html>
<head>
<style type="text/css">
            #container{
               width:800px;
               margin:0 auto;
            }
 			html {
 				width: 100% ;
  				height: 100% ;
  				background: radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  				background: -moz-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
  				background: -webkit-radial-gradient(center, #FFF 0%, #CCC 70%, #CCC 100%) no-repeat;
			}
            #search{
               width:700px;
               padding:10px;
			   margin: center;
            }
 
            #button{
               display: block;
               width: 100px;
               height:30px;
               border:solid #009688 1px;
			   border-radius: 10px;
               background: #009688;
            }
 
            ul{
                margin-left:-40px;
            }
 
            ul li{
                list-style-type: none;
                border-bottom: solid 1px white;
                height: 40px;
            }
 
            li:hover{
                background: #333;
				color:white;
            }
 
            a{
              text-decoration: none;
			  color:black;
            }
			body {
			font-family:"Myriad Pro", "Trebuchet MS", sans-serif;
			}
			
        </style>
</head>
<center>
<body>
<div style="margin-top:100px">

	<div id="container">
    	<input type="text" id="search" placeholder="Search Data..."/>
        <div style="margin-left:-600px">
        <div style="margin-top:5px">
        <input type="button" id="button" value="Search" />
        </div>
            </div>
        	<ul id="result"></ul>        
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                  
                 function search(){
 
                      var ser=$("#search").val();
 
                      if(ser!=""){
                     $("#result").html("<img src='loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"ajaxSearch.php",
                            data:"ser="+ser,
                            success:function(data){
                                $("#result").html(data);
                                $("#search").val("");
                             }
                          });
                      }      
                 }
                  $("#button").click(function(){
                     search();
                  });
 
                  $('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
                      }
                  });
            });
        </script>
        <?
	$previous = "javascript:history.go(-1)";
		if(isset($_SERVER['HTTP_REFERER'])) {
    	$previous = $_SERVER['HTTP_REFERER'];
		}
	?>
    </br></br></br>
    <a href="<?= $previous ?>">H O M E</a>
</body>
</center>
</html>
