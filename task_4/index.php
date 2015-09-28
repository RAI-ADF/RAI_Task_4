<?php
session_start();

if (!empty($_SESSION['username'])) {
        header('location:clientPage.php');
}
?>

<html>
<head>
    <title>LOGIN</title>
<style>
body {
    background-color: #d0e4fe;
}

h1 {
    color: orange;
    text-align: left;
}

p {
    font-family: "Times New Roman";
    font-size: 20px;
}
</style>


<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 125px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #98bf21;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color: #7A991A;
}
</style>
</head>

<body>
 <ul>
  <li><a href="index.php">Sign In</a></li>
  <li><a href="registration.php">Sign Up</a></li>  
</ul>

<h1 align="left">Sign In</h1>
 <?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Registrasi berhasil, silahkan login!</h3>';
}
?>
 
<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h3>Username dan Password belum diisi!</h3>';
    } else if ($_GET['error'] == 2) {
        echo '<h3>Username belum diisi!</h3>';
    } else if ($_GET['error'] == 3) {
        echo '<h3>Password belum diisi!</h3>';
    } else if ($_GET['error'] == 4) {
        echo '<h3>Username dan Password tidak terdaftar!</h3>';
    }
}
?>



<form name="login" action="otentikasi.php" method="post">
<form name="registrasi" action="index.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" /></td>
    </tr>
    <tr align="left">        
       <td align="right" colspan="3">               
            <input type="submit" name="login" value="Login" />
        </td>     
    </tr>
</table>
</form>

</body>
</html>


