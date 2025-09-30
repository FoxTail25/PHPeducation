<?php
include_once('classes/Form.php');
include_once('classes/Input.php');
include_once('classes/origin/Tag.php');

$form = (new Form)->setAttrs(['action' => '', 'method' 
    => 'GET']); 

echo $form->open();
echo (new Input)->setAttr('name', 'num1')->
    setAttr('type', 'number');
echo'<br/>';
echo (new Input)->setAttr('name', 'num2')->
setAttr('type', 'number'); 
echo'<br/>';
echo (new Input)->setAttr('name', 'num3')->
setAttr('type', 'number'); 
echo'<br/>';
echo (new Input)->setAttr('name', 'num4')->
setAttr('type', 'number'); 
echo'<br/>';
echo (new Input)->setAttr('name', 'num5')->
setAttr('type', 'number'); 
echo'<br/>';
echo (new Input)->setAttr('type', 'submit');
echo $form->close();

if(array_sum($_REQUEST)){
    echo (new Tag('p'))->setText('сумма всех чисел: '.array_sum($_REQUEST))->show();
} else {
    echo (new Tag('p'))->setText('сумма всех чисел: 0')->show();
}
if(
    isset($_REQUEST['num1']) or
    isset($_REQUEST['num2']) or
    isset($_REQUEST['num3']) or
    isset($_REQUEST['num4']) or
    isset($_REQUEST['num5'])
){
    echo '<br\>';
    echo '<a href="/"><button>Сбросить</button></a>';
}

?>