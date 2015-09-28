<?php
mysql_connect("localhost","root","") or die("error koneksi");
mysql_select_db("raitask4") or die("error pilih db");
 
 $search=$_POST["ser"];
 
  
 $result=mysql_query("SELECT * FROM user where username like '%$search%'");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    echo "<li>$row[username]</br>";
	echo "<li>$row[nama]</br>";
	echo "<li>$row[email]</br>";
	echo "<li>$row[place]</br>";
	echo "<li>$row[tanggal]</br>";
    }   
 }else{
    echo "<li>No User Found<li>";
 }
?>
