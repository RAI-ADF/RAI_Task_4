<?php
    include('koneksi.php');
    if(isset($_POST)){
        $user = mysql_real_escape_string(htmlentities($_POST['username']));
        $pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
        $sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
        if(mysql_num_rows($sql) == 0){
            echo "<script>alert('User not found!'); document.location='login.php';</script>";;
        }else{
            $row = mysql_fetch_assoc($sql);
            if($row['username'] == "admin"){
                $_SESSION['admin']=$user;
                echo "<script>alert('Login Success!'); document.location='adminpage.php';</script>";
            }else{
                $_SESSION['guest']=$user;
                echo "<script>alert('Login Success!'); document.location='clientpage.php';</script>";
            }
        }
    }
?>