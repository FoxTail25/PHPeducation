<?php
include_once('classes/Form.php');
include_once('classes/origin/Tag.php');

$form = (new Form);
echo $form
->setAttrs(['action'=>'test.php', 'method'=>'POST'])
->open();
echo (new Tag('input'))
->setAttrs(['id'=>'inp1','name'=>'text_1'])
->open();
echo (new Tag('button'))
->setAttr('type','submit')
->setText('Отправить')
->show();
echo $form->close();
if(isset($_POST['text_1'])){
    echo $_POST['text_1'];
    unset($_POST['text_1']);
}
?>