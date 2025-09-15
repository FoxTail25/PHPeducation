<?php
include_once('classes/FileManipulator.php');

$fm = new FileManipulator;

$result = $fm->create('files/hello.txt', 'hello World!');
echo $result;
echo '<br/>';
$result = $fm->copy('files/hello.txt', 'files/hello_copy.txt');
echo $result;
echo '<br/>';
// echo '<br/>';
$result = $fm->rename('files/hello_copy.txt', 'hello_rename.txt');
echo $result;
echo '<br/>';
$result = $fm->replace('files/hello_rename.txt', 'files2/hello_replace.txt');
echo $result;
echo '<br/>';
$result = $fm->weigh('files2/hello_replace.txt');
echo $result;
echo '<br/>';
// echo '<br/>';
$result = $fm->delete('files/hello.txt');
echo $result;
// echo '<br/>';

	
?>