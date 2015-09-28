<!DOCTYPE html>
<html>
<head>
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
            <td><input type="text" name="orderID" maxlength="20" required="required"/></td>
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
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>