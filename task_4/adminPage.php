<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1>Order Data</h1>
	<table id="records_table" border='1'>
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
    while ($result = mysql_fetch_array($query) or die(mysql_error())) {
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $result['kodeOrder']; ?></td>
            <td><?php echo $result['productName']; ?></td>
            <td><?php echo $result['quantity']; ?></td>
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
