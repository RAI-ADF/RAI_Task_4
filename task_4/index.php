<?php
$title = "Home";
require_once 'auth.php';
include 'header.php';
include 'navbar.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'database.php';
    $user = $_SESSION["user"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $sql = sprintf("INSERT INTO notes (user,title,content) VALUES ('%s','%s','%s')",
        $user,$title,$content);
    $result = $conn->query($sql);
    if($result) {
        $message = 'Note added.<br/>'.$conn->error;
    }else {
        $message = 'Adding note failed.<br/>'.$conn->error;
    }
    $conn->close();
    header('Location: index.php?message='.$message);
} else { ?>
    <body style="padding-top: 0%">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
                    <div class="panel panel-default">
                    	  <div class="panel-heading">
                    			<h3 class="panel-title">New Note</h3>
                    	  </div>
                    	  <div class="panel-body">
                    			<form action="index.php" method="post" role="form">
                    				<div class="form-group">
                    					<input type="text" class="form-control" name="title" id="title" placeholder="Insert title" required>
                    				</div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10" placeholder="Insert note content" required></textarea>
                                    </div>
                    				<button type="submit" class="btn btn-primary">Submit</button>
                    			</form>
                    	  </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                    <?php if(!empty($_GET["message"]))
                        echo "<div class=\"well\">".$_GET["message"]."</div>";
                    ?>
                </div>
            </div>
        </div>
    </body>
<?php include 'footer.php'; }?>
