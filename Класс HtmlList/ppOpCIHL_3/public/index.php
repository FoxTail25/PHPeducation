<?php
include('classes/Ul.php');
include('classes/Ol.php');
include('classes/ListItem.php');
echo (new Ul)
->addItem((new ListItem())->setText('item1'))
->addItem((new ListItem())->setText('item2'))
->addItem((new ListItem())->setText('item3'));
echo (new Ol)
->addItem((new ListItem())->setText('item1'))
->addItem((new ListItem())->setText('item2'))
->addItem((new ListItem())->setText('item3'));
?>