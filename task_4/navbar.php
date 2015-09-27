<nav class="navbar navbar-default" role="navigation">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    			<span class="sr-only">Toggle navigation</span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-blackboard"></span></a>
    	</div>

    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <?php if(!empty($_SESSION["user"])){ ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["user"]; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if($_SESSION["user"]=="admin")
                            echo "<li><a href=\"adminPage.php\">Admin Page</a></li>";
                        else
                            echo "<li><a href=\"clientPage.php\">User Page</a></li>";
                        ?>
                        <li ><a href="logout.php" >Logout</a ></li >
                    </ul>
                </li>
                <?php }?>
            </ul>
        </div><!-- /.navbar-collapse -->
</nav>