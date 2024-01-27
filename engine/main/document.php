<?php
class Document {
	private $title;
	private $scripts = array();
	
	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function addScript($script) {
		$this->scriptsarray[] = $script;
	}
	
	public function getScripts() {
		return $this->scripts;
	}
}
?>
