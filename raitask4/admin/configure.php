<?php
define('dbserver', 'localhost'); // Your Database host
define('dbusername', 'root'); // Your Database user name
define('dbpassword', ''); // Your Database password
define('dbdatabase', 'raitask4'); // Your Database Name

$connection = mysqli_connect(dbserver,dbusername,dbpassword,dbdatabase); // Connection
?>
