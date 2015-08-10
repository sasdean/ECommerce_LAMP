<html>
<head>
	<title>Acme Company</title>
	<script src="jquery-1.11.3.js"></script>
	<script src="js/root.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	require('partial_header.php');
?>
<div id='categories'>
	<form id='search'>
		<h4>Product Search</h4>
		<input type='search'>
	</form>	
	<h4>Categories</h4>
	<?php
		foreach($data as $data)
		{
	?>
		<p><a href='/product/show_one_cat/<?=$data['id']?>'><?=$data['name']?></a></p>
	<?php
		}
	?>
	<p><a href='/'>Show All</a></p>
</div> <!-- categories -->
<?php
	foreach($notes as $note)
	{		
?>
<div class='images'>
	<a href='/product/show_ind/<?=$note['id']?>/<?=$note['category_id']?>'> 
		<img src="assets/<?=$note['id']?>.jpg" id='<?=$note['id']?>'><br><br>
		<p><?=$note['name']?></p>
		<p><?=$note['price']?></p>
	</a>
</div>
<?php
	}
?>
	<form action='page_number'  method='post'>
		<input type="hidden" name="page_number"/>
				<a href="">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
	</form>	
</body>
</html>