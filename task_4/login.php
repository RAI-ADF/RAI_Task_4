<?php
require 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["user"]) && !empty($_POST["pass"])) {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $sql = sprintf("SELECT username FROM users WHERE username='%s' AND password=MD5('%s')",$username,$password);
        $result = $conn->query($sql);
        if($result->num_rows==1){
            echo "<p>Login berhasil, menuju halaman user</p>";
            $user = $result->fetch_row()[0];
            session_start();
            $_SESSION['user']=$user;
            $conn->close();
            header('Location: index.php');
        } else{
            header("Location: login.php");
        }
    }
} else {
    $title = 'Login';
    include 'header.php'; ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-log-in"></span> | Login
                        </div>
                        <div class="panel-body">
                            <form action="login.php" method="post" role="form">
                                <div class="form-group">
                                    <label for="user">Username</label>
                                    <input type="text" class="form-control" name="user" id="user" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" class="form-control" name="pass" id="pass" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                                <div class="pull-right">Don't have account? Register <a href="registration.php">here</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php include 'footer.php'; } ?>
