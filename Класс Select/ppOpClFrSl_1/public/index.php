<?php
include_once('classes/Select.php');
include_once('classes/Option.php');


echo (new Select)->setAttr('name', 
    'list') 
    ->add( (new Option())->setText('item1') )
    ->add( (new Option())->setText('item2') )
    ->add( (new Option())->setText('item3') )
    ->show();
?>