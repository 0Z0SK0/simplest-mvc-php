<?php
class footerController extends Controller {
	public function index() {
		
		return $this->load->view('common/footer', $this->data);
	}
}
?>
