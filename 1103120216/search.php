<?php
 include "searchConnect.php";
 
 $title=$_POST["title"];
 
  
 $result=mysql_query("SELECT * FROM userdb where nama_user like '%$title%'");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    echo "<li>$row[nama_user]</br>";
	echo "<li>$row[username_u]</br>";
	echo "<li>$row[email_user]</br>";
	echo "<li>$row[dob_user]</br>";
	echo "<li>$row[provinsi_user]</br>";
	echo "<li>$row[kota_user]</br>";
    }   
 }else{
    echo "<li>No User Found<li>";
 }
