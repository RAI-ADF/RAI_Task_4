<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search User</title>
<link rel="stylesheet" href="adminSearch.css">
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
        <div id="container">
             <input type="text" id="search" placeholder="Search by Name"/>
             <input type="button" id="button" value="Search" />
             <ul id="result"></ul>
        </div>
</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                  
                 function search(){
 
                      var title=$("#search").val();
 
                      if(title!=""){
                     //   $("#result").html("<img alt="ajax search" src='ajax-loader.gif'/>");
                         $.ajax({
                            type:"post",
                            url:"search.php",
                            data:"title="+title,
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
