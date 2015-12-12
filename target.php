<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-10">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/npm.js"></script>
    </head>

    <body>
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <div class="navbar-brand" href="#">Dashboard</div>
                    </div>
                    
                    <div>
                        <ul class="nav navbar-nav">
                            
                            <li ><a href="lop.php">List Of Project</a></li>
                            <li class="active"><a href="target.php">Target</a></li>
                            <li ><a href="persentase.php">Percents</a></li>
                            
                            
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">INSERT <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="inputlop.php">Insert Project</a></li>
                                    <li><a href="inputtarget.php">Insert Target</a></li>
                                    <li class="divider"></li>
                                    
                                </ul>
                            </li>
                        </ul>

                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                                            
                        
                    </div>
                </div>
            </nav>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
        </div>
               
        <div class="row">
            <div class="container">
                <div class="col-md-11">
                    <h4 class="text-primary">
                        List Of Project
                    </h4>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Table
                        </div>

                        <div class="panel-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        
                                           <th>Group AM</th>
                                           <th>Scaling Target</th>
                                          
                                    </tr>
                                </thead>
                                    <?php
                                        $host = "localhost";
                                        $user = "root";
                                        $pass = "";
                                        $dbName = "dashboard_b_2";
                                        mysql_connect($host, $user, $pass);
                                        mysql_select_db($dbName)
                                        or die ("Connect Failed !! : ".mysql_error());
                                       
                                        $no=0;

                                        $tampil=mysql_query("SELECT * FROM tb_pj_am");


                                        while($r=mysql_fetch_array($tampil)){
                                            $harga1=number_format($r[scaling_am],0,",",".");

                                            echo "<tr>";
                                       
                                            echo "<td>$r[id_pj_am]</td>";
                                            echo "<td>$r[name_pj_am]</td>";
                                            echo "<td> Rp. $harga1 </td>";
                                            echo "</tr>";

                                        }
                                        $no++;  

                                    ?>

                                   


                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>