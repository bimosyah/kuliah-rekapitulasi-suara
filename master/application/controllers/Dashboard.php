<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $title = 'Dashboard';

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$this->load->view('dashboard/index',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */