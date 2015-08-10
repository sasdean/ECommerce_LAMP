<html>
<head>
	<title>Acme Company</title>
	<script src="../../../jquery-1.11.3.js"></script>
	<script src="../../../js/root.js"></script>
	<link rel="stylesheet" href="../../../css/style5.css">
</head>
<body>
<?php
	require('partial_header.php');
?>
<div id='image'>
	<img src="../../../assets/<?= $data['id']?>.jpg">
	<h3><?=$data['description']?></h3>

	<form action='../views/cart.php' method='post'>
		<select name='select'>
			<option value='1'>1 (<?=$data['price']?>)</option>
			<option value='2'>2 (<?=$data['price']*2?>)</option>
			<option value='3'>3 (<?=$data['price']*3?>)</option>	
		</select>
			<input name ='id' type='hidden' value='<?=$data['id']?>'>
			<input name ='name' type='hidden' value='<?=$data['name']?>'>
			<input name ='price' type='hidden' value='<?=$data['price']?>'>
			<button type='submit'>Buy</button>
	</form>
</div>

<div>
	<h4>Similar Items</h4>
	<?php
		foreach($sims as $sim)
		{
	?>
		<a href='/product/show_ind/<?=$sim['id']?>/<?=$sim['category_id']?>'> 	
			<img src='../../../assets/<?=$sim['id']?>.jpg'>
			<p><?=$sim['name']?></p>
			<p><?=$sim['price']?></p><br><br>
		</a>
	<?php
		}
	?>
</div>
</body>
</html>