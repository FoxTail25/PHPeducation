<table>
<tr>
	<th>
		Имя
	</th>
	<th>
		цена
	</th>
	<th>
		кол-во
	</th>
	<th>
		категория
	</th>
</tr>
<?php
	$result ='';
foreach($products as $product){
	$result .='<tr>';
	$result .="<td>$product[name]</td>";
	$result .="<td>$product[price]</td>";
	$result .="<td>$product[quantity]</td>";
	$result .="<td>$product[category]</td>";
	$result .='</tr>';
}
echo $result;
?>
</table>