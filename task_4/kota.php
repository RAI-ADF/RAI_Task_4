<?php
/**
 * Created by PhpStorm.
 * User: rizki
 * Date: 25/09/15
 * Time: 13:20
 */

$json_data = file_get_contents("kota_provinsi.json");
$data = json_decode($json_data,true);

if(!isset($_GET['province'])) {
    foreach ($data as $num => $province) {
        foreach ($province as $key => $name) {
            echo "<option value='".$num."'>".$key."</option>";
        }
    }
} else {
    foreach ($data[$_GET['province']] as $num => $province) {
        foreach ($province as $key => $name) {
            echo "<option value='".$name."'>".$name."</option>";
        }
    }
}
