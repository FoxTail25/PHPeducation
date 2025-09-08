<?php
include_once('classes/Form.php');
include_once('classes/Input.php');
include_once('classes/Submit.php');
include_once('classes/Hidden.php');

$form = (new Form)->setAttrs([
    'action' => 'test.php',
    'method' => 'GET'
]);

echo $form->open();
    echo (new Hidden)->setAttr('name', 
        'id')->setAttr('value', '123'); 
    echo (new Input)->setAttr('name', 
        'year'); 
    echo new Submit;
echo $form->close();

?>