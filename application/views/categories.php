<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.images{
			display: inline-block;
			padding: 10px;
		}
		
	</style>
</head>
<body>
	<?php
		require('partial_header.php');

		foreach($data as $data)
		{
	?>
			<div class='images'>
				<a href='/product/show_ind/<?=$data['id']?>'/> 
					<img src="/<?=$data['id']?>.jpg" "id=<?=$data['id']?>"></a><br><br>
					<p><?=$data['name']?></p>
					<p><?=$data['price']?></p>
					<p><?=$data['description']?></p>
					<hr>
			</div>
		
	<?php
		}
	?>
</body>
</html>