<?php
include ('machine/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
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

            <div class="col-md-7">
                <h4 class="text-primary">
                    Input Project
                </h4>
                
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            Please fill the information above
                        </div>

                        <form method="POST" action="machine/p_inputlop.php" >
                        <div class="panel-body">
                            

                            <div class="panel">
                            <select class="form-control selectpicker text-center"  data-width="100%" type="text" name="input_am">
                                <option value=''>- AM -</option>
                                    <?php 
                                        $pj_am_q=mysql_query("SELECT name_pj_am,id_pj_am FROM tb_pj_am ORDER BY name_pj_am ASC");
                                        while($pj_am_varr=mysql_fetch_array($pj_am_q)){                  
                                            echo "<option value=$pj_am_varr[id_pj_am]>$pj_am_varr[name_pj_am]</option>";
                                        }
                                    ?>
                            </select>
                            </div>
                            
                            <div class="panel">
                            <select class="form-control selectpicker text-center"  data-width="100%" type="text" name="input_cc">
                                <option value=''>- CC -</option>
                                    <?php 
                                        $cc_q=mysql_query("SELECT name_cc,id_cc FROM tb_cc ORDER BY name_cc ASC");
                                        while($cc_varr=mysql_fetch_array($cc_q)){                  
                                            echo "<option value=$cc_varr[id_cc]>$cc_varr[name_cc]</option>";
                                        }
                                    ?>
                            </select>
                            </div>
                            
                            <div class="panel">
                            <select class="form-control selectpicker text-center"  data-width="100%" type="text" name="input_project">
                                <option value=''>- Project -</option>
                                    <?php 
                                        $project_q=mysql_query("SELECT name_project,id_project FROM tb_project ORDER BY name_project ASC");
                                        while($project_varr=mysql_fetch_array($project_q)){                  
                                            echo "<option value=$project_varr[id_project]>$project_varr[name_project]</option>";
                                        }
                                    ?>
                            </select>
                            </div>
                            
                            
                            
                            <div class="panel">
                             <input class="form-control text-center" type="text" name="input_revenue" placeholder="- INSERT PROJECT VALUE -">
                            
                            </div>
                            
                            <div class="panel">
                             <input class="form-control text-center" type="text" name="input_recurring" placeholder="- INSERT RECURRING -">
                            
                            </div>
                            
                            <div class="panel">
                             <input class="form-control text-center" type="text" name="input_otc" placeholder="- INSERT OTC -">
                            
                            </div>

                            
                            <div class="panel">
                            <select class="form-control selectpicker text-center"  data-width="100%" type="text" name="input_month">
                                <option value=''>- Month -</option>
                                <option value='January'>January</option>
                                <option value='February'>February</option>
                                <option value='March'>March</option>
                                <option value='April'>April</option>
                                <option value='May'>May</option>
                                <option value='June'>June</option>
                                <option value='July'>July</option>
                                <option value='August'>August</option>
                                <option value='September'>September</option>
                                <option value='October'>October</option>
                                <option value='November'>November</option>
                                <option value='December'>December</option>
                            </select>
                            </div>
                            
                            <div class="panel">
                            <select class="form-control selectpicker text-center "  data-width="100%" type="text" name="input_stat">
                                <option value=''>- Status -</option>
                                    <?php 
                                        $stat_q=mysql_query("SELECT name_stat,id_stat FROM tb_stat ORDER BY name_stat ASC");
                                        while($stat_varr=mysql_fetch_array($stat_q)){                  
                                            echo "<option value=$stat_varr[id_stat]>$stat_varr[name_stat]</option>";
                                        }
                                    ?>
                                    
                            </select>
                            </div>

                          
                            
                            </div>

                        <div class="panel-footer">
                            <button class="form-control btn btn-primary" type="submit"><h5>SUBMIT</h5></button>
                        </div>
                        </form>
                </div>
            
            </div>
            </div>
        </div>
        
    </body>
</html>
