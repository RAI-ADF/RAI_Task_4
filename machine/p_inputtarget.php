<?php

include ('connect.php');

$varrin_am=$_POST[input_am];
$varrin_target=$_POST[input_target];

mysql_query("UPDATE `dashboard_b_2`.`tb_pj_am` SET `scaling_am`='$varrin_target' WHERE id_pj_am=$varrin_am;");
echo mysql_error();

echo "berhasil";


?>