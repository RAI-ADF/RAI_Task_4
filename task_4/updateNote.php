<?php
$title = "Home";
require_once 'auth.php';
include 'header.php';
include 'navbar.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST["update"])){
        require 'database.php';
        $title = $_POST["title"];
        $content = $_POST["content"];
        $id = $_POST["id"];
        $sql = sprintf("UPDATE notes SET title= '%s', content = '%s' WHERE notes.id = %d",$title,$content,$id);
        $result = $conn->query($sql);
        if($result) {
            $message = 'Note updated.<br/>'.$conn->error;
        }else {
            $message = 'updating note failed.<br/>'.$conn->error;
        }
        $conn->close();
        header('Location: index.php?message='.$message);
    } else{
        require 'database.php';
        $sql = sprintf("SELECT * FROM notes WHERE user='%s' AND id=%d",$_SESSION["user"],$_POST["note"]);
        $result = $conn->query($sql);
        $result = $result->fetch_all();
        ?>
        <body style="padding-top: 0%">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Note</h3>
                        </div>
                        <div class="panel-body">
                            <form action="updateNote.php" method="post" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" value="<?php echo $result[0][2] ?>" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10" required><?php echo $result[0][3] ?></textarea>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $result[0][0]; ?>">
                                <button type="submit" class="btn btn-primary" name="update">Submit</button>
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
    <?php include 'footer.php';} }?>