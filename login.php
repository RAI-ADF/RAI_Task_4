<?php

    session_start(); // Memulai Session
    $error=''; // Variabel untuk menyimpan pesan error

    $is_ajax = $_REQUEST['is_ajax'];
    if(isset($is_ajax) && $is_ajax)
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $connection = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("naik_gunung", $connection);

        $query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
            if ($rows == 1) {
                $_SESSION['login_user']=$username; // Membuat Sesi/session
                echo "success";
                } else {
                echo "Username atau Password belum terdaftar";
                }
            mysql_close($connection); // Menutup koneksi
    }

?>