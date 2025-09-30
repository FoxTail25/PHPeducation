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
		echo $th->open('label',['for'=>'ta']).'Дополнительно:';
        echo $fh->textAreaOpen(['name'=>'text','id'=>'ta']);
        echo $fh->textAreaClose();
        echo $th->close('label');
        echo $th->open('br');
        echo $th->open('br');
        echo $fh->select(
            ['name' => 'list', 'class' => 
                'eee'], 
            [
                ['text' => 'item1', 'attrs' => 
                    ['value' => '1']], 
                ['text' => 'item2', 'attrs' => 
                    ['value' => '2', 'selected' => true]], 
                ['text' => 'item3', 'attrs' => 
                    ['value' => '3', 'class' => 'last']], 
            ],
            
        );
		echo $fh->submit();
	echo $fh->closeForm();

    echo '<p><a href="/">reset</a></p>';

    if(isset($_REQUEST)){
        var_dump($_REQUEST);
    }

?>