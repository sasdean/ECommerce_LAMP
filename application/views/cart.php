
<html>
<head>
	<meta name="description" content = "">
	<meta charset="utf-8">
	<title>Acme Company</title>
<style>
#shipping{
	outline: 1px solid black;
	width: 375px;
	height: 350px;
	margin: 0px auto;
}
#billing{
	outline: 1px solid black;
	width: 375px;
	height: 350px;
	margin: 0px auto;
}
#products{
	outline: 1px solid black;
	width: 375px;
	
	margin: 0px auto;
}
h3{
	padding: 0px 5px;
}
p{
	display: inline-block;
	padding-left: 10px;
}
h1{
	text-align: center;
}
table{
	margin: 0px auto;
	padding: 10px;
}
tr{

	margin: 0px auto;
	text-align: left;
}
th{
	
	text-decoration: underline;
	text-align:  center;
}
td{
	text-align: center;
}
button a{
	background-color: black;
	text-decoration: none;
}
button{
	border-radius: 10px;
	background-color: black;
	margin-left: 10px;
	
}
#header{
	background-color: black;
	height:75px;
	padding: 10px;
}
a{
	color: white;
	padding: 10px;
	display: inline-block;
}
h5{
	float: right;
	color: white;
	padding: 10px;
	display: inline-block;
}
</style>
</head>
<body>
<div id='header'>
	<a href='/'><h2>Acme eCommerce</h2></a>
	<h5><?php if(!$this->session->userdata('total')){ echo'<a href="/">Shopping Cart (0)</a>'; }
	else { echo'<a href="/product/show_cart">Shopping Cart ('.$this->session->userdata('total').')</a>'; } ?></h5>
</div>
<div id='container'>
	<div id='products'>
		<h1>Shopping Cart</h1>
			<table>
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
						<?php
							foreach($cart as $key => $value)
							{							
						?>
							<tr>
								<td><?=$value['name']?></td>
								<td><?=$value['price']?></td>
								<td><?=$value['qty']?></td>
								<td><?=$value['price']*$value['qty']?></td>
								<td><button><a href="/product/deleteitem/<?= $key ?>">Delete</a></button></td>
							</tr>
						<?php
							}
						?>	
					</tr>
				</tbody>
			</table>
			<button><a href='/'>Continue Shopping</a></button>
	</div>
		<br><br>
	<div id='shipping'>
		<form action = '/product/shipping' method='post'>
			<h3>Shipping Information</h3>
			<p>Name:<input type='text' name='sname' method='post'></p><br>
			<p>Address:</p>
			<input type='text' name='saddress' method='post'><br>
			<p>Address 2:</p>
			<input type='text' name='saddress2' method='post'><br>
			<p>City:</p>
			<input type='text' name='scity' method='post'><br>
			<p>State:</p>
			<input type='text' name='sstate' method='post'><br>
			<p>ZIP:</p>
			<input type='text' name='szip' method='post'>
		</form>
	</div>
		<br><br>
	<div id='billing'>
		<form action ='/product/billing' method='post'>
	  		<h3>Billing Information</h3>
	  		<input type="checkbox" name="check" value='shipping'>Billing address is the same as your shipping address
	  		<p>Name:</p>
			<input type='text' name='bname' method='post'><br>
			<p>Address:</p>
			<input type='text' name='baddress' method='post'><br>
			<p>Address 2:</p>
			<input type='text' name='baddress2' method='post'><br>
			<p>City:</p>
			<input type='text' name='bcity' method='post'><br>
			<p>State:</p>
			<input type='text' name='bstate' method='post'><br>
			<p>ZIP:</p>
			<input type='text' name='bzip' method='post'><br>
			<p>Security Code:</p>			
			<input type='text' method='post'><br>
			<p>Expiration:</p>
			<input type='text' method='post'><br>
			<button><a href= '/checkout' >Purchase</a></button>
		</form>
	</div>
</div><!-- container -->
</body>
</html>