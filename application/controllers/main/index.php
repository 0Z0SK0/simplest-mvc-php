<?php
class indexController extends Controller {
	public function index() {
		
		// Simple get data from library
		$this->load->library('example');
		$exampleLib = new exampleLibrary();
		$this->data['test'] = $exampleLib->test();

		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('main/index', $this->data);
	}
}
?>