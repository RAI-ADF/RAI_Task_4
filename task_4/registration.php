<?php
require 'database.php';
$message=null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $pass_confirmation = $_POST["pass_confirmation"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pob = $_POST["city"];
            $dob = $_POST["dob"];
            $sql = sprintf("INSERT INTO users (username,password,name,email,place_of_birth,date_of_birth) VALUES ('%s',MD5('%s'),'%s','%s','%s','%s')",
                $user,$pass,$name,$email,$pob,$dob);
            $result = $conn->query($sql);
            $conn->close();
            if($result) {
                $message = 'Registration successs<br/>';
            }else {
                $message = 'Registration failed<br/>';
            }
            header('Location: registration.php?message='.$message);
} else {
    $title = 'Register';
    include 'header.php'; ?>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-user"></span> | Register
                    </div>
                    <div class="panel-body">
                        <form action="registration.php" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="user">username</label>
                                        <input type="text" class="form-control" name="user" id="user" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="password" class="form-control" name="pass" id="pass" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pass_confirm">Password confirmation</label>
                                        <input type="password" class="form-control" name="pass_confirm" id="pass_confirm" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <legend>Place of birth</legend>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <select name="province" id="province" class="form-control" onchange="kota()">
                                            <option value=""> -- Select One -- </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <select name="city" id="city" class="form-control">
                                            <option value=""> -- Select One -- </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="text" name="dob" id="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <?php if(!empty($_GET["message"])){
                                        echo "<div class='well'>".$_GET["message"]."</div>";
                                    }?>
                                </div>
                            </div>
                            <button id="submitBtn" type="submit" class="form-control btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--MESSAGES-->
            <div class="col-md-3">
                <div class="well well-sm" id="messages_box">
                    <div id="messages"></div>
                </div>
            </div>
        </div>
    </div>
    </body>
<?php include 'footer.php'; } ?>
<script>
    $(document).ready(function(){
        provinsi();
        $("#messages_box").hide();
        $('#dob').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd"
        });
        $("#email").keyup(validateForm);
        $("#pass_confirm").keyup(validateForm);
        $("#pass").keyup(validateForm);
    });

    function provinsi () {
        $.ajax("kota.php")
            .done(function (res) {
                $("#province").html(res);
            })
            .error(function () {
                console.log("ERROR");
            })
    }

    function kota(){
        var provinsi = $("#province").val();
        $.ajax("kota.php?province="+provinsi)
            .done(function(res){
                $("#city").html(res);
            })
            .error(function () {
                console.log("ERROR");
            })
    }
    
    function validateForm(){
        var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var email = $("#email").val();
        var password = $("#pass").val();
        var confirmPassword = $("#pass_confirm").val();
        var messages;
        $("#messages_box").fadeIn();
        if (!regex.test(email))
            messages = "Email not correct!<br/>";
        else
            messages = "Email correct!<br/>";
        if(password!=='' && confirmPassword!=='')
            if ((password != confirmPassword))  {
                messages = messages + "Passwords do not match!<br/>";
            } else {
                messages = messages + "Passwords match!<br/>";
            }
        $("#messages").html(messages);
    }
</script>


