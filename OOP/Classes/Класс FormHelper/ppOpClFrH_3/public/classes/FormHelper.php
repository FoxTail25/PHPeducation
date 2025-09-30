<?php
include_once('classes/TagHelper.php');

class FormHelper extends TagHelper {
    public function openForm($attr=[]){
        return $this->open('form', $attr);
    }
    public function closeForm(){
        return $this->close('form');
    }
    public function input($attrs=[]){
        if(isset($attrs['name'])){
            $name = $attrs['name'];
            if(isset($_REQUEST[$name])){
                $attrs['value'] = $_REQUEST[$name];
            }
        }
        return $this->open('input', $attrs);
    }
    public function password($attrs=[]){
        $attrs['type'] = 'password';
        return $this->input($attrs);
    }
    public function hidden($attrs=[]){
        $attrs['type'] = 'hidden';
        return $this->open('input',$attrs);
    }
    public function submit($attrs=[]){
        $attrs['type'] = 'submit';
        return $this->open('input',$attrs);
    }
    public function checkbox($attrs=[]){
        $attrs['type'] = 'checkbox';
        $attrs['value'] = 1;
        if(isset($attrs['name'])){
            $name = $attrs['name'];
            if(isset($_REQUEST[$name]) and $_REQUEST[$name] == 1){
                $attrs['checked'] = true;
            }
            $hidden = $this->hidden(['name'=>$name, 'value'=>'0']);
        } else {
            $hidden = '';
        }
        return $hidden . $this->open('input', $attrs);
    }
    public function textAreaOpen($attrs=[]){
        if(isset($attrs['name'])){
            $name = $attrs['name'];
            if(isset($_REQUEST[$name])) {
                $text = $_REQUEST[$name];
            } else {
                $text = '';
            }
        }
        return $this->open('textarea',$attrs).$text;
    }
    public function textAreaClose(){
        return $this->close('textarea');
    }
}

?>