<?php session_start(); ?>


<html>
<head>
	<title>Check Out</title>
</head>
<body>

<div id="container">
<h1>Products</h1>
<form action="all_products" method="post">

<?php 
		
?>
		
						
		
		Qty: <?= $items['quantity']?>
		Description: <?= $items['description']?>
		Price: <?=$items['price'];?>



</form>
</div>

</body>
</html>