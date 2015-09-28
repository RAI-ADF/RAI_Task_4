<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
 
//simpan data ke database
$query = mysql_query("insert into client values('$username', '$password', '$nik', '$nama', '$nohp', '$email')") or die(mysql_error());
 
if ($query) {
    header('location:index.php');    
}
?>
<html>
<body>

</script>
</body>
</html>

