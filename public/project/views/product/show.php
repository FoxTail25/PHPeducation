<h1>Продукт <?=$product['name']?></h1>
<h3><?=$product['description']?></h3>
<p>
	Цена: <?=$product['price']?>, количество: <?=$product['quantity']?>
</p>
<p>
	Стоимость (цена * количество): <?=$product['price'] * $product['quantity']?>$
</p>
<p>
	<a href="/product/all/">все продукты<a>
</p>