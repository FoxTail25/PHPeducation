<?php
include('classes/HtmlList.php');
include('classes/ListItem.php');
$list = new HtmlList('ul');
echo $list->setAttr('class','aaa')
->addItem((new ListItem())->setText('item1')->setAttr('class','first_item'))
->addItem((new ListItem())->setText('item2'))
->addItem((new ListItem())->setText('item3'));
?>