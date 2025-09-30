<?php
include_once('classes/Validator.php');

$val = new Validator;

echo $val->isEmail('123@1---23')['msg'];
echo'<br/>';
echo $val->isEmail('test@ttee123.ru')['msg'];
echo'<br/>';
echo $val->isDomain('1')['msg'];
echo'<br/>';
echo $val->isDomain('ru')['msg'];
echo'<br/>';
echo $val->isDomain('com')['msg'];
echo'<br/>';
echo $val->isDomain('http://example.com')['msg'];
echo'<br/>';
echo $val->isDomain('https://example.com')['msg'];
echo'<br/>';
echo $val->isDomain('example.com')['msg'];
echo'<br/>';
echo $val->inRange(1,2,3)['msg'];
echo'<br/>';
echo $val->inRange(2,1,3)['msg'];
echo'<br/>';
echo $val->inLength('string',1,3)['msg'];
echo'<br/>';
echo $val->inLength('строка',5,6)['msg'];
echo'<br/>';
	
?>