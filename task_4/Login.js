
$(document).ready(function(){
            $('#submit').click(function(){
                var uname=$('#username').val();
                var pass=$('#password').val();

                if(uname=='' || pass==''){
                    alert("Please fill username and password field")
                }else{
                    $.POST("validate.php",{username:uname, password:pass},function(data){
                        if(data=='admin'){
                             window.location="adminPage.php";
                        }else if (data=='client') {
                            window.location="clientPage.php";
                        }else{
                            alert("Login Failed !");
                        }
                    }):
                }
            });
        });