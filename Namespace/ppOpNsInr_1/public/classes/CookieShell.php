<?php

class CookieShell {
    public function set($name,$value,$time){
        setcookie($name, $value, time() + $time);
        $_COOKIE[$name] = $value;
    }
    public function setSeance($name,$value){
        //устанавливает сеансовый куки который обнуляется при закрытии браузера
        setcookie($name, $value);
        $_COOKIE[$name] = $value;
    }
    public function get($name){
        if($this->exists($name)){
            return $_COOKIE[$name];
        }
    }
    public function del($name){
        if($this->exists($name)){
            setcookie($name, '', time());
            unset($_COOKIE[$name]);
        }
    }
    public function exists($name){
        if(isset($_COOKIE[$name])){
            return true;
        }
        return false;

    }
}
?>