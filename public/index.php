<?php
include_once('classes/FileManipulator.php');

$fm = new FileManipulator;

$result = $fm->create('files/hello.txt', 'hello World!');
echo $result;
// echo '<br/>';
// $result = $fm->copy('hello.txt', 'hello_copy.txt');
// echo $result;
// echo '<br/>';
// echo '<br/>';
// $result = $fm->rename('hello_copy.txt', 'hello_rename.txt');
// echo $result;
// echo '<br/>';
// echo '<br/>';
// $result = $fm->delete('hello.txt', 'hello World!');
// echo $result;
// echo '<br/>';

	
?>