<?php
include_once('classes/FormHelper.php');
include_once('classes/TagHelper.php');


$fh = new FormHelper();
$th = new TagHelper();

	echo $fh->openForm(['action' => '', 'method' 
		=> 'GET']); 
        echo $th->show('style','label{display:inline-block;width:70px;}');
		echo $th->open('label',['for'=>'log']).'login:';
        echo $th->close('label');
		echo $fh->input(['name' => 'login','id'=>'log']);
        echo $th->open('br');
		echo $th->open('label',['for'=>'pswd']).'password:';
        echo $th->close('label');
		echo $fh->password(['name' => 'pass','id'=>'pswd']);
        echo $th->open('br');
		echo $th->open('label',['for'=>'check']).'Запомнить меня:';
        echo $th->close('label');
        echo $fh->checkbox(['name' => 'check','id'=>'check']);
        echo $th->open('br');
        echo $th->open('br');
		echo $fh->submit();
	echo $fh->closeForm();

    echo '<p><a href="/">reset</a></p>';

?>