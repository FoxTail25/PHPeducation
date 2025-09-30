<?php
include_once('classes/Form.php');
include_once('classes/Submit.php');
include_once('classes/Radio.php');



$form = (new Form)->setAttrs(['method'=>'GET','action'=>'']);
echo $form->open();
echo (new Radio)->setAttrs(['name'=>'city','value'=>'Moskow','id'=>'msk'] );
echo (new Tag('label'))->setText('Moskow')->setAttr('for','msk')->show(); 
echo (new Radio)->setAttrs(['name'=>'city','value'=>'Minsk','id'=>'mnk'] );
echo (new Tag('label'))->setText('Minsk')->setAttr('for','mnk')->show(); 

echo (new Radio)->setAttrs(['name'=>'fruit','value'=>'pear','id'=>'pe'] );
echo (new Tag('label'))->setText('pear')->setAttr('for','pe')->show(); 
echo (new Radio)->setAttrs(['name'=>'fruit','value'=>'apple','id'=>'ap'] );
echo (new Tag('label'))->setText('apple')->setAttr('for','ap')->show(); 
echo new Submit;
echo $form->close();
var_dump($_REQUEST);
?>