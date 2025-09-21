<?php
class SessionShell {
		public function __construct() {
			if (!isset($_SESSION)) {
				session_start();
			}
		}
		public function set($name, $value) {
			$_SESSION[$name] = $value;
		}
		public function get($name) {
			return $_SESSION[$name];
		}
		public function del($name) {
			$_SESSION[$name] = null;
			unset($_SESSION[$name]);
		}
		public function exists($name) {
			if(isset($_SESSION[$name])){
				return true;
			}
			return false;
		}
		public function destroy() {
			session_destroy();
		}
	}

?>