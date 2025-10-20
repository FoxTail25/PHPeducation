<h1><?= $h1; ?></h1>
<div id="content">
	<div style="width:fit-content; margin:0 auto;">

	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
			<td><a href="/product/<?= $product['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>

</div>