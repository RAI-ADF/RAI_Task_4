<?php
	if(!mysql_connect("127.0.0.1","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("db_task4"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
		$tampil = mysql_query("SELECT * FROM user  ORDER BY username");
		echo "<table class='list'><thead>
          <tr>
          <td class='left'>username</td>
          <td class='left'>Isi data</td>
          </tr></thead><tbody>";
		  echo " <h2>List data Input</h2>";
		   while ($r=mysql_fetch_array($tampil)){
       echo " </tr><td class='left'>$r[username]</td>
             <td class='left'>$r[isi]</td></tr>";
				 }
	?>