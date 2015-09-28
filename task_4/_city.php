<?php
if(isset($_GET["province"])){
  $province = $_GET["province"];
  $provinces = array(
    "Aceh" => array("Banda Aceh", "Langsa", "Lhokseumawe", "Sabang", "Subulussalam"),
    "Jawa Barat" => array("Bekasi", "Depok", "Cimahi", "Tasikmalaya", "Banjar"),
    "Papua" => array("Jayapura")
  );

  // Display city dropdown based on country name
  if($province !== 'Select'){
    foreach($provinces[$province] as $value){
      echo "<option>". $value . "</option>";
    }
  }
}
?>
