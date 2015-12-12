<?php
                                        $host = "localhost";
                                        $user = "root";
                                        $pass = "";
                                        $dbName = "dashboard_b_2";
                                        mysql_connect($host, $user, $pass);
                                        mysql_select_db($dbName)
                                        or die ("Connect Failed !! : ".mysql_error());
                                        
                                        $no=1;
                                        $total=0;

                                        $lop_q=mysql_query("SELECT * FROM tb_lop");
                                        $target_q=mysql_query("SELECT * FROM tb_target")
                                    ?>