<?php
include_once('classes/Form.php');
include_once('classes/Input.php');
include_once('classes/Submit.php');
include_once('classes/TextArea.php');
	$form = (new Form)->setAttrs(['action' 
		=> 'test.php', 'method' => 'GET']); 
	
	echo $form->open();
		echo (new Input)->setAttr('name', 
			'user'); 
		echo (new Textarea)->setAttr('name', 
			'message')->show(); 
		echo new Submit;
	echo $form->close();

?>