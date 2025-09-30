<?php
include_once('classes/Form.php');
include_once('classes/Input.php');

$form = (new Form)->setAttrs(['action' => '', 'method' 
    => 'GET']); 

echo $form->open();
    echo (new Input)->setAttr('name', 'year')->
        open(); 
    echo (new Input)->setAttr('type', 'submit')->
        open(); 
echo $form->close();

?>