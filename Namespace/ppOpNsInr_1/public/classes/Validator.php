<?php
	class Validator
	{
		public function isEmail($emailStr) {
			// проверяет строку на то, что она корректный email
			$answer = ['validate' => false, 'msg' => "Адрес $emailStr не является корректным email-адресом."];
			if (filter_var($emailStr, FILTER_VALIDATE_EMAIL)) {
					$answer['validate'] = true;
					$answer['msg'] = "Адрес $emailStr является корректным email-адресом.";
			}
			return $answer;
		}
		public function isDomain($domenStr) {
			// проверяет строку на то, что она корректное имя домена
			$answer = ['validate' => false, 'msg' => "$domenStr не является корректным доменом."];
			if (filter_var($domenStr, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) !== false) {
					$answer['validate'] = true;
					$answer['msg'] = "$domenStr является корректным доменом";
			}
			return $answer;
		}
		public function inRange($num, $from, $to) {
			// проверяет число на то, что оно входит в диапазон
			$num = (int)$num;
			$from = (int)$from;
			$to = (int)$to;
			$answer = ['validate' => false, 'msg' => "Число $num не входит в диапазон от $from до $to"];
			if($num >= $from and $num <= $to ) {
				$answer = ['validate' => true, 'msg' => "Число $num входит в диапазон от $from до $to"];
			}
			return $answer;
		}
		public function inLength($str, $from, $to) {
			// проверяет строку на то, что ее длина входит в диапазон
			$num = mb_strlen($str);
			$from = (int)$from;
			$to = (int)$to;
			$answer = ['validate' => false, 'msg' => "Длинна строки '$str' не входит в диапазон от $from до $to"];
			if($this->inRange($num,$from,$to)['validate']){
					$answer = ['validate' => true, 'msg' => "Длинна строки '$str' входит в диапазон от $from до $to"];
			}
			return $answer;
		}
	}
?>