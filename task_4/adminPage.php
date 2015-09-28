<!DOCTYPE html>
<?php include('config.php') ?>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1>Data Order</h1>
   
	<table id="records_table1" border='1'>
    <thead>
    <tr>
    	<td>No.</td>
        <td>Order ID</td>
        <td>Product Name</td>
        <td>Quality</td>
    </tr>
    </thead>
    
    <tbody>
    <?php
    $query = "select * from pesan";
    $result = mysql_query($query) or die(mysql_error());
 
    $no = 1;
    while ($data = mysql_fetch_array($result) or die(mysql_error())) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kodeOrder']; ?></td>
            <td><?php echo $data['productName']; ?></td>
            <td><?php echo $data['quantity']; ?></td>
            <td><a href="#">Edit</a> || <a href="#">Hapus</a></td>
        </tr>
    <?php
        $no++;
    }
    ?>


    </tbody>
</table>

	

</body>
</html>
