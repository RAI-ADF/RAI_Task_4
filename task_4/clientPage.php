<!DOCTYPE html>
<html>
<head>
    <?php include('loginCheck.php') ?>
	<title>ORDER PRODUCT</title>

</head>
<body>
	<h1>ORDER PRODUCT</h1>
<form name="input_data" action="inputProduct.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>Order ID</td>
            <td>:</td>
            <td><input type="text" name="kodeOrder" maxlength="20" required="required"/></td>
        </tr>
        <tr>
            <td>Product Name</td>
            <td>:</td>
            <td><input type="text" name="productName" maxlength="50" required="required" /></td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td>:</td>
            <td><input type="number" min="0" name="quantity" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submitProduk" value="Order" /></td>
        </tr>
        <tr>
            <td align="left"><a href="logout.php">LOGOUT</a></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>