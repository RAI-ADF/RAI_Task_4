<?php
$title = "Admin";
require_once 'auth.php';
include 'header.php';
include 'navbar.php';
require 'database.php';

$result_notes = $conn->query("SELECT * FROM notes where user='".$_SESSION["user"]."'");
if($_SESSION["user"]!='admin'){
?>
<body style="padding-top: 0%">
<div class="container">
    <h1 style="text-align: center"><b>Notes</b></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Notes List</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>user</th>
                                <th>title</th>
                                <th>content</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($result_notes->fetch_all() as $row){
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
                                echo "<td>".
                                    "<form action=\"hapusNote.php\" method=\"post\" role=\"form\">".
                                    "<input name=\"note\" type=\"hidden\" value=\"".$row[0]."\"></input>".
                                    "<button class='btn btn-default' type=\"submit\">delete</button>".
                                    "</form>".
                                    "</td>";
                                echo "</tr>";
                            } ?>
                            <tr>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script !src="">
    function hapus(){
        $.ajax("hapusNote.php");
    }
</script>
<?php include 'footer.php'; } else{
    header("Location: index.php");
}?>
