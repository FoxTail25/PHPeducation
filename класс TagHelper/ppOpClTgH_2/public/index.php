<?php
include_once('classes/TagHelper.php');


$th = new TagHelper();
echo $th->open('div') . 'text' . $th->close('div');

echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']); 
echo $th->open('input', ['name' => 'year']); 
echo $th->open('input', ['type' => 'submit']); 
echo $th->close('form');

echo $th->show('p','text2');

?>