<?php
session_start();
include 'koneksi.php';
  mysql_query("INSERT INTO data(isi,
								  username) 
					        VALUES('$_POST[isi]',
                                  '{$_SESSION['username']}')");
 header('location:clientPage.php');

?>