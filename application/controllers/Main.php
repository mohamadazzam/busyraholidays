<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __Construct() {
		parent::__Construct ();
		$this->load->database();  
		$this->load->helper('url_helper');
	}

	public function index() {

   		// Maintenance Mode check
		if($this->config->item('maintenance_mode') == TRUE) {
			redirect('downtime', 'refresh');
			die();
		} else if ($this->config->item('maintenance_mode') == FALSE){
			try{
				$checkDowntime = $this->main_model->checkDownTime('2','1');
				if($checkDowntime[0]->wStatus == 'Y' || $checkDowntime[0]->wStatus == 'y'){
					redirect('downtime', 'refresh');
					die();
				} else {
					$getCategory = $this->omra_model->getPackageCategory('1');
					$data['pCategory'] = $getCategory;
					$data['slider'] = $this->gallery_model->getSlider();
					$this->load->view('welcome_message', $data);
				}
			} catch (Exception $e){
				die();
			}
		} 

	}

	

}