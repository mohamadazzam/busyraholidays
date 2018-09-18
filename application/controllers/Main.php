<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __Construct() {
		parent::__Construct ();
		$this->load->database(); 
		$this->load->model('gallery');  
		$this->load->helper('url_helper');
	}

	public function index() {
   		$data['slider'] = $this->gallery->getSlider();
   		$this->load->view('welcome_message', $data);
   	}

}