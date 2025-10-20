<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($poducts as $product): ?>
		<tr>
			<td><?= $product['id']; ?></td>
			<td><?= $product['name']; ?></td>
			<td><a href="/page/<?= $page['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>