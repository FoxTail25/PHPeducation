<?php foreach($products as $key => $product):?>

	<h1>Продукт <a href="/product/<?=$key?>/"><?=$product['name']?></a> из категории <?=$product['category']?></h1>
	<p>
	Цена: <?=$product['price']?>, количество: <?=$product['quantity']?>
	</p>
	<p>
	Стоимость (цена * количество): <?=$product['price'] * $product['quantity']?>$
	</p>

<?php endforeach ?>