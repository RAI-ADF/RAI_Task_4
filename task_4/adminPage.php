<?php
$title = "Admin";
require_once 'auth.php';
include 'header.php';
include 'navbar.php';
require 'database.php';

$result_notes = $conn->query("SELECT * FROM notes ORDER BY user");
$result_user = $conn->query("SELECT * FROM users");
if($_SESSION["user"]=='admin'){
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
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($result_notes->fetch_all() as $row){
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[3]</td>";
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
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Users List</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>name</th>
                                <th>username</th>
                                <th>email</th>
                                <th>birth of place</th>
                                <th>date of birth</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($result_user->fetch_all() as $row){
                                $time = strtotime($row[5]);
                                $time = date("d-m-Y",$time);
                                echo "<tr>";
                                echo "<td>$row[2]</td>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[3]</td>";
                                echo "<td>$row[4]</td>";
                                echo "<td>$time</td>";
                                echo "</tr>";
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include 'footer.php'; } else{
    header("Location: index.php");
}?>

