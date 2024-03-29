<?php
class Load {
	private $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function view($name, $vars = array()){
		$file = APPLICATION_DIR . 'views/' . $name . '.php';
		if(is_readable($file)){
			extract($vars);
			
	  		ob_start();
	  		include($file);
	  		$content = ob_get_contents();
	  		ob_end_clean();
			
	  		return $content;
		}
		exit('Failed to load ' . $name . ' template');
	}
	
	public function model($name){
		$modelClass = $name . 'Model';
		$modelPath = APPLICATION_DIR . 'models/' . $name . '.php';
		
		if(is_readable($modelPath)){
			require_once($modelPath);
			if(class_exists($modelClass)){
				$this->registry->$modelClass = new $modelClass($this->registry);
				return true;
			}
		}
		exit('Failed to load ' . $name . ' model');
	}
	
	public function library($name){
		$libClass = $name . 'Library';
		$libPath = ENGINE_DIR . 'libs/' . $name . '.php';
		
		if(is_readable($libPath)){
			require_once($libPath);
			return true;
		}
		exit('Failed to load ' . $name . ' library');
	}
}
?>
