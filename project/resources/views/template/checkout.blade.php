<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./checkout.css">
</head>
<body>
	<style>
		h1 {
			font-size: 28px;
			font-weight: bold;
			text-align: center;
			margin-top: 20px;
		}
		
		/* CSS cho phần form nhập thông tin thanh toán */
		form {
			max-width: 500px;
			margin: 20px auto;
			padding: 20px;
			background-color: #f7f7f7;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}
		
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		
		input[type="text"],
		input[type="email"],
		input[type="tel"],
		input[type="month"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
		}
		
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 8px 16px;
			border: none;
			border-radius: 5px;
			font-size: 18px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #0062cc;
		}
	</style>
    <h1>Product payment information</h1>
	<form action="#" method="POST">
		<label for="name">Customer name:</label>
		<input type="text" id="name" name="name"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<label for="phone">Phone number:</label>
		<input type="tel" id="phone" name="phone"><br>

		<label for="address">Address:</label>
		<input type="text" id="address" name="address"><br>

		<label for="card">Payment card:</label>
		<input type="text" id="card" name="card"><br>

		<label for="expiry">Expiration date:</label>
		<input type="month" id="expiry" name="expiry"><br>

		<label for="cvv">CVV code:</label>
		<input type="text" id="cvv" name="cvv"><br>

		<button id="addToCartButton" >Pay</button>
	</form>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
    const addToCartButton = document.getElementById('addToCartButton');

    addToCartButton.addEventListener('click', function() {
        const isConfirmed = confirm('Do you want to add this product to your cart?');

        if (isConfirmed) {
            alert('The product has been successfully added to the cart!');
        } else {
            alert('You have canceled adding the product to the cart.');
        }
    });
});
	</script>
</body>
</html>