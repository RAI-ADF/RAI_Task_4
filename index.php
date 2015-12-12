<?php
    include ('machine/connect.php');
    
?>
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

        <link href="../bootstrap/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../belajar/style.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/bootstrap.min.css"> 
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
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
                           
                            <li class="active"><a href="lop.php">List Of Project</a></li>
                            <li ><a href="target.php">Target</a></li>
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
                <div class="col-md-30">
                    <h4 class="text-primary">
                        List Of Project
                    </h4>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Table
                        </div>

                        <div class="panel-body">
                            <div class="box-body table-responsive">
                            </div>
                             
                             <table id="example1" class="table table-bordered table-striped" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>AM</th>
                                        <th>NIPNAS</th>
                                        <th>CC</th>
                                        <th>Project</th>
                                        <th>Est. Month </th>
                                        <th>Status</th>
                                        <th>Project Value</th>
                                        <th>Recurring</th>
                                        <th>OTC</th>
                                        <th>Total Revenue</th>
                                        
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <?php
                                        while($lop_varr=mysql_fetch_array($lop_q)){


                                            $harga1=number_format($lop_varr[value_lop],0,",",".");
                                            $harga2=number_format($lop_varr[recurring],0,",",".");
                                            $harga3=number_format($lop_varr[otc],0,",",".");
                                            $harga4=number_format($lop_varr[total_revenue],0,",",".");
                                            

                                            echo "<tr>";
                                            echo '<td>'.$no.'</td>'; 

                                            echo "<td>";
                                                $pj_am_q=  mysql_query("SELECT * FROM tb_pj_am WHERE id_pj_am=$lop_varr[id_pj_am]");
                                                $pj_am_varr= mysql_fetch_array($pj_am_q);
                                                echo $pj_am_varr[name_pj_am];
                                            echo "</td>";

                                            echo "<td>$lop_varr[id_cc]</td>";

                                            

                                            echo "<td>";
                                                $cc_q=  mysql_query("SELECT * FROM tb_cc WHERE id_cc=$lop_varr[id_cc]");
                                                $cc_varr= mysql_fetch_array($cc_q);
                                                echo $cc_varr[name_cc];
                                            echo "</td>";

                                           

                                            echo "<td>";
                                                $project_q=  mysql_query("SELECT * FROM tb_project WHERE id_project=$lop_varr[id_project]");
                                                $project_varr= mysql_fetch_array($project_q);
                                                echo $project_varr[name_project];
                                            echo "</td>";
                                            
                                            echo "<td>$lop_varr[month]</td>";
                                            
                                            echo "<td>";
                                                $stat_q=  mysql_query("SELECT * FROM tb_stat WHERE id_stat=$lop_varr[id_stat]");
                                                $stat_varr= mysql_fetch_array($stat_q);
                                                echo $stat_varr[name_stat];
                                            echo "</td>";

                                            echo "<td>Rp. $harga1</td>";
                                            echo "<td>Rp. $harga2</td>";
                                            echo "<td>Rp. $harga3</td>";
                                            echo "<td>Rp. $harga4</td>";
                                            
                                            //echo "<td>Rp.";
                                               // $total_revenue_q=  mysql_query("SELECT * FROM tb_lop WHERE id_lop=$lop_varr[id_lop]");
                                               // $total_revenue_varr= mysql_fetch_array($total_revenue_q);
                                                //echo $total_revenue_varr=number_format($lop_varr[total_revenue]=$lop_varr[otc]+$lop_varr[recurring],0,",",".");
                                            //echo "</td>";

                                             //echo "<td>";
                                               //$total_revenue=$lop_varr[otc]+$lop_varr[recurring]=$lop_varr[total_revenue];
                                             // $harga4=number_format($total_revenue,0,",",".");
                                             // echo"Rp. $harga4";
                                         //  echo "</td>";
                                           

                                       $total += $lop_varr['total_revenue'];
                                            $no++;

                                            }
  				//	echo"</table></br>";
    			//	echo "TOTAL REVENUE:".$total;
                                    ?>


                                </tbody>

                                <tfoot>
                                </tfoot>

                            </table>
                        </div> <!-- /.box-body -->
                    </div>
                    <script src="js/jquery-1.11.1.min.js"></script> 
                    <script src="js/bootstrap.min.js"></script> 
                    <script src="js/jquery.dataTables.min.js"></script> 
                    <script src="js/dataTables.bootstrap.js"></script> 
                    <script type="text/javascript"> $(function() { $('#example1').dataTable(); }); </script>

                </div>
            </div>
        </div> 
        <script src="../bootstrap/jquery/jquery-1.11.2.min.js"></script>
        <script src="../bootstrap/bootstrap-3.3.4-dist/js/bootstrap.js"></script> 
    </body>
</html>