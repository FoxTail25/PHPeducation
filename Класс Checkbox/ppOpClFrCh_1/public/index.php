<?php
include_once('classes/Form.php');
include_once('classes/Input.php');
include_once('classes/Submit.php');
include_once('classes/Checkbox.php');


$form = (new Form)->setAttrs(['method'=>'GET','action'=>'']);
echo $form->open();
echo (new Checkbox)->setAttr('name', 'checkbox');
echo (new Input)->setAttr('name', 'user'); 
echo new Submit;
echo $form->close();
?>