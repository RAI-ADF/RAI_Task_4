<?php

include ('connect.php');

$varrin_am=$_POST[input_am];
$varrin_cc=$_POST[input_cc];
$varrin_project=$_POST[input_project];
$varrin_stat=$_POST[input_stat];
$varrin_revenue=$_POST[input_revenue];
$varrin_recurring=$_POST[input_recurring];
$varrin_otc=$_POST[input_otc];
$varrin_month=$_POST[input_month];
$varrin_total_revenue=$varrin_otc + $varrin_recurring;



mysql_query("INSERT INTO `dashboard_b_2`.`tb_lop` (`id_lop`, `id_pj_am`, `id_cc`, `id_project`, `month`,`id_stat`,`value_lop`, `recurring`, `otc`,`total_revenue`) 
            VALUES (NULL, '$varrin_am','$varrin_cc','$varrin_project','$varrin_month','$varrin_stat','$varrin_revenue','$varrin_recurring', '$varrin_otc','$varrin_total_revenue');");
echo mysql_error();
echo "berhasil :)"

?>


