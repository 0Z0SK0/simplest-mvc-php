<?php
class indexController extends Controller {
	public function index() {
		
		// Simple get data from model
		$this->load->model('example');
		
        // Test insert
        $this->exampleModel->testInsertQuery("test");

        // Test query
        $this->data['query'] = $this->exampleModel->testQuery()['name'];

		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('example/index', $this->data);
	}
}
?>