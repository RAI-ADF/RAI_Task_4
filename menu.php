<!DOCTYPE html>
<html>
<head>
<style>
	#primary_nav_wrap
{
	margin-top:15px
}

#primary_nav_wrap ul
{
	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul a
{
	display:block;
	color:#333;
	text-decoration:none;
	font-weight:700;
	font-size:12px;
	line-height:32px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
	position:relative;
	float:left;
	margin:0;
	border: 2px solid black;
	padding:0
	
}

#primary_nav_wrap ul li.current-menu-item
{
	background:#ddd
}

#primary_nav_wrap ul li:hover
{
	background:#f6f6f6
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#fff;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}
</style>
</head>

<body>

<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="indeks.php">Home</a></li>
  <li><a href="#">Daftar/Login</a>
    <ul>
      <li><a href="Registrasi.php">Registrasi</a></li>
      <li><a href="Login.php">Login</a></li>
    </ul>
  </li>
  <li><a href="adminPage.php">Menu Admin</a>
  </li>
  <li><a href="userPage.php">Menu User</a>
  </li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</nav>

</body>
</html>
