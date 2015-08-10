<html>
<head>
</head>
<body>
<div id='header'>
	<a href='/'><h2>Acme eCommerce</h2></a>
	<h5><?php if(!$this->session->userdata('total')){ echo 'Shopping Cart (0)'; }
	else { echo '<a href="product/show_cart">Shopping Cart ('.$this->session->userdata('total').')</a>'; } ?></h5>
</div>
</body>
</html>