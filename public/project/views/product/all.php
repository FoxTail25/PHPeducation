<?php 

	foreach($products as $product):?>

		<h1>Продукт <a href="/product/<?=$product['id']?>/"><?=$product['name']?></a></h1>
		<h4>Описание: <?=$product['description']?></h4>
		<p>
		Цена: <?=$product['price']?>, количество: <?=$product['quantity']?>
		</p>
		<p>
		Стоимость (цена * количество): <?=$product['price'] * $product['quantity']?>$
		</p>

	<?php endforeach 

?>
