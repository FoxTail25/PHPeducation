<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class NumController extends Controller	{

	 public function sum($param){
        $num1 = $param['n1'];
        $num2 = $param['n2'];
        $num3 = $param['n3'];
        echo "$num1 + $num2 + $num3 = ".($num1 + $num2 + $num3);
     }
		
	}
?>