<?php include ('machine/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-10">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <li ><a href="target.php">Target</a></li>
                            <li class="active"><a href="persentase.php">Percents</a></li>
                            
                            
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
                <div class="col-md-30">
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
                                        <th>LOP Revenue</th>
                                        <th>Prospect</th>
                                        <th>Proposal</th>
                                        <th>Billcomp</th>
                                        <th>Delivery</th>
                                        <th>Target Scaling (x3)</th>
                                        <th>Target Scaling </th>
                                        <th class='text-center'>Percents</th>
                                        
                                    </tr>
                                </thead>
         
                                <tbody>
                                    <?php
                                        $no=1;
                                        $pj_am_q=mysql_query("SELECT * FROM tb_pj_am ORDER BY name_pj_am ASC");
                                        while($pj_am_varr=mysql_fetch_array($pj_am_q)){ 
                                            
                                            $temp_value=0;
                                            $target=0;
                                            $percent=0;
                                            $angka=0;
                                            $stat1=0;
                                            $harga1=number_format($pj_am_varr[scaling_am],0,",",".");
                                            

                                            echo "<tr>"
                                            . "<td>$no</td>". 
                                                  
                                                    "<td>$pj_am_varr[name_pj_am]</td>";
                                                    $value_lop_q=mysql_query("SELECT * FROM tb_lop WHERE id_pj_am=$pj_am_varr[id_pj_am]");
                                                    while($value_lop_varr=  mysql_fetch_array($value_lop_q)){
                                                        $temp_value=$temp_value+$value_lop_varr[total_revenue];
                                                        $temp_valuee=number_format($temp_value,0,",",".");
                                                    }

                                                    echo
                                                    "<td>Rp. $temp_valuee</td>";
                                                    $jml_stat=0;
                                                    $prospect_q=  mysql_query("SELECT SUM(IF(id_pj_am=$pj_am_varr[id_pj_am] AND id_stat=9,total_revenue,0)) AS jml_stat FROM tb_lop");
                                                    while($value_stat_varr=  mysql_fetch_array($prospect_q)){
                                                        $jml_stat=number_format($value_stat_varr[jml_stat],0,",",".");
                                                    };
                                                    echo "<td>$jml_stat</td>";
                                                    $jml_stat=0;
                                                    $prospect_q=  mysql_query("SELECT SUM(IF(id_pj_am=$pj_am_varr[id_pj_am] AND id_stat=8,total_revenue,0)) AS jml_stat FROM tb_lop");
                                                    while($value_stat_varr=  mysql_fetch_array($prospect_q)){
                                                        $jml_stat=number_format($value_stat_varr[jml_stat],0,",",".");
                                                    };
                                                    echo "<td>$jml_stat</td>";
                                                    $jml_stat=0;
                                                    $prospect_q=  mysql_query("SELECT SUM(IF(id_pj_am=$pj_am_varr[id_pj_am] AND id_stat=8,total_revenue,0)) AS jml_stat FROM tb_lop");
                                                    while($value_stat_varr=  mysql_fetch_array($prospect_q)){
                                                        $jml_stat=number_format($value_stat_varr[jml_stat],0,",",".");
                                                    };
                                                    echo "<td>$jml_stat</td>";
                                                    $jml_stat=0;
                                                    $prospect_q=  mysql_query("SELECT SUM(IF(id_pj_am=$pj_am_varr[id_pj_am] AND id_stat=1,total_revenue,0)) AS jml_stat FROM tb_lop");
                                                    while($value_stat_varr=  mysql_fetch_array($prospect_q)){
                                                        $jml_stat=number_format($value_stat_varr[jml_stat],0,",",".");
                                                    };
                                                    echo "<td>$jml_stat</td>";
                                                    if($pj_am_varr[scaling_am]>=1){
                                                    $target=number_format($pj_am_varr[scaling_am]*3,0,",",".");}
                                                    echo
                                                    "<td>Rp. $target</td>"
                                                    . "<td>Rp. $harga1</td>";
                                                    if(!empty($temp_value)){
                                                    if(!empty($target)){$percent=round($temp_value/$target*100,2);}
                                                    }

                                                    echo 
                                                    "<td class='text-center'>$percent %</td>"
                                                    
                                                    . "</tr>";
                                            $no++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>