<?php

    session_start(); // Memulai Session
    $error=''; // Variabel untuk menyimpan pesan error

    $is_ajax = $_REQUEST['is_ajax'];
    if(isset($is_ajax) && $is_ajax)
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $status = 0;
        if ($username=='nabil'){
            $status =1;
        }
    

        $connection = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("naik_gunung", $connection);

        $query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
            if ($rows == 1) {
                if($status == 1 ){
                    echo "success1";
                }
                else{

                    echo "success";
                }

                $_SESSION['login_user']=$username;
            }
            mysql_close($connection); 
    }

?>