<?php
include_once('classes/Form.php');
include_once('classes/Input.php');
include_once('classes/Submit.php');
include_once('classes/Password.php');

$form = (new Form)->setAttrs([
    'action' => 'test.php',
    'method' => 'GET'
]);

echo $form->open();
    echo (new Input)   ->setAttr('name', 
        'login'); 
    echo (new Password)->setAttr('name', 
        'passw'); 
    echo new Submit;
echo $form->close();

?>