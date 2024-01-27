<?php
class headerController extends Controller {

	public function index() {

		// Simple read data from config
		$this->data['title'] = $this->config->title;
	
		return $this->load->view('common/header', $this->data);
	}
}
?>
