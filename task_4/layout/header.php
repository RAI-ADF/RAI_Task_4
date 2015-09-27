<div class="nav menu-warp">
	<nav class="menu">
		<ul class="clearfix">
			<li>
				<a href="#">Menu <span class="arrow">&#9660;</span></a>
				<ul class="sub-menu">
					<?php if(isset($_COOKIE['level']) && $_COOKIE['level']=="user"){ ?>
					<li><a href="index.php">home</a></li>
					<li><a href="clientPage.php">input data</a></li>
					<?php }else if(isset($_COOKIE['level']) && $_COOKIE['level']=="admin"){ ?>
					<li><a href="adminPage.php">dashboard</a></li>
					<?php }else{ ?>
					<li><a href="login.php">log in</a></li>
					<li><a href="registration.php">register</a></li>
					<?php } ?>
					<li><a href="_logout.php">logout</a></li>
				</ul>
				
			</li>
		</ul>
	</nav>
</div>