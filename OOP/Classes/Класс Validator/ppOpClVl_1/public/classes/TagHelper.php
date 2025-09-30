<?php
class TagHelper {
    public function open($tagName, $attrArr=[]){
        return "<$tagName {$this->getAttr($attrArr)}>";
    }
    public function getAttr($attrArr){
        $result = '';
        if(!empty($attrArr)){

            foreach($attrArr as $attrName => $attrValue){
                $result .=(string)$attrName."=\"$attrValue\"";
            }
        }
        return $result;
    }
    public function close($tagName){
        return "</$tagName>";
    }
    public function show($tagName, $text){
        return "{$this->open($tagName)}$text{$this->close($tagName)}";
    }
}
?>