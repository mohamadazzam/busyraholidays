<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downtime extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		if($this->config->item('maintenance_mode') == FALSE) {
			try{
				$checkDowntime = $this->main_model->checkDownTime('2','1');
				if($checkDowntime[0]->wStatus == 'Y' || $checkDowntime[0]->wStatus == 'y'){
					// redirect('downtime', 'refresh');
					// die();
					// $this->data['sDate']	= date('d/m/Y', strtotime($checkDowntime[0]->sDate));
					// $this->data['eDate']	= date('d/m/Y', strtotime($checkDowntime[0]->eDate));
					$this->data['sDate']	= date('F d, Y', strtotime($checkDowntime[0]->sDate));
					$this->data['eDate']	= date('F d, Y', strtotime($checkDowntime[0]->eDate));
					$this->data['sTime']	= date('h:m:s A', strtotime($checkDowntime[0]->sTime));
					$this->data['eTime']	= date('h:m:s A', strtotime($checkDowntime[0]->eTime));
					$this->load->view('downtime/main.php', $this->data);
				} else {
					redirect('/','refresh');
				}
			} catch (Exception $e){
				die();
			}
		} else {
			redirect('/','refresh');
			die();
		}
	}
}
