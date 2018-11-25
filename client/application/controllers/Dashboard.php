<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// if ($this->session->userdata('login') == FALSE) {
		// 	redirect('login','refresh');
		// }
	}
	
	public function index()
	{
		if ($this->session->userdata('login') == FALSE) {
			redirect('Login','refresh');
		}

		$data['title'] = "Dashboard";
		$this->load->view('dashboard/index',$data);		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */