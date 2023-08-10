<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./cart.css">
</head>
<body>
	<style>
		/* Thiết lập font chữ và màu nền cho trang web */
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		
		/* Thiết lập các kiểu đường viền cho bảng */
		table {
			border-collapse: collapse;
			border: 1px solid #ccc;
			width: 100%;
		}
		
		/* Thiết lập màu nền và màu chữ cho các thẻ tiêu đề của bảng */
		th {
			background-color: #ddd;
			color: #333;
		}
		
		/* Thiết lập các kiểu đường viền và căn giữa cho các ô của bảng */
		td {
			border: 1px solid #ccc;
			text-align: center;
		}
		
		/* Thiết lập định dạng cho các nút tiếp tục mua hàng và thanh toán */
		a {
			display: inline-block;
			padding: 10px;
			margin: 10px;
			background-color: #4CAF50;
			color: #fff;
			text-decoration: none;
			border-radius: 5px;
		}
		
		a:hover {
			background-color: #3e8e41;
		}
	</style>
    <h1>Cart</h1>
	<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
				<th>Select</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>LG TV</td>
				<td>1</td>
				<td>$499..99</td>
				<td>$499.99</td>
				<td><input type="checkbox" name="" id=""></td>
			</tr>
			<tr>
				<td>Laptop Dell</td>
				<td>1</td>
				<td>$1350.99</td>
				<td>$1350.99</td>
				<td><input type="checkbox" name="" id=""></td>
			</tr>
			<tr>
				<td>SmartWatch Full 4K</td>
				<td>2</td>
				<td>$59.99</td>
				<td>$119.98</td>
				<td><input type="checkbox" name="" id=""></td>
			</tr>
			<tr>
				<td colspan="4">Total</td>
				<td>$1970.96</td>
			</tr>
		</tbody>
	</table>
	<a href="/">Continue shopping</a>
	<a href="/checkout">Pay</a>
</body>
</html>