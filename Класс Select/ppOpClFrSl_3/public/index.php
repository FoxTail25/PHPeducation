<?php
include_once('classes/Select.php');
include_once('classes/Option.php');

include_once('classes/Form.php');
include_once('classes/Submit.php');

$form = new Form;
echo $form->open();
echo (new Select)->setAttr('name', 'list') 
->add( (new Option())->setText('item1') )
->add( (new Option())->setText('item2')->setSelected() ) 
->add( (new Option())->setText('item3') )
->show();
echo new Submit;
echo $form->close();

?>