<?php

$json = file_get_contents("indonesia.json");
$data = json_decode($json, true);


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