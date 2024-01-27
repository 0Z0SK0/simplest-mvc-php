<?php
class Config {
	private $data = array();
	
	public function __construct() {
		if(is_readable('config.php')) {
			require_once('config.php');
			$this->data = array_merge($this->data, $config);
			return true;
		}
		exit('Failed to load config file');
	}
	
	public function __set($key, $val){
		$this->data[$key] = $val;
	}
	
	public function __get($key){
		if(isset($this->data[$key])){
			return $this->data[$key];
		}
		return false;
	}
}
?>
