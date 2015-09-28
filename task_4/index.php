<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['is_admin'])){
	
	$is_admin = $_SESSION['is_admin'];
	$logged_in = true;

} else {

	$logged_in = false;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<?php echo ($logged_in) ? "" :  "<li><a href='login.php'>Login</a></li>"; ?>
			<?php echo ($logged_in) ? "<li><a href='do_logout.php'>Logout</a></li>" : "" ?>
			<?php if($logged_in){
				echo ($is_admin) ? "<li><a href='adminPage.php'>Admin Page</a></li>" : "<li><a href='memberPage.php'>Member Page</a></li>"; 
			}?>
		</ul>
	</nav>

	<h1>Halaman Utama</h1>
	<p>Silakan login terlebih dahulu</p>
</body>
</html>