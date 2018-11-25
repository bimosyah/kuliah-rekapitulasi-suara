<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $title = 'Dashboard';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCalon');
		$this->load->model('mDesa');
		$this->load->model('mKecamatan');
		$this->load->model('mPetugas');
		$this->load->model('mTps');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['calon'] = count($this->mCalon->getAll());
		$data['desa'] = count($this->mDesa->getAll());
		$data['kecamatan'] = count($this->mKecamatan->getAll());
		$data['petugas'] = count($this->mPetugas->getAll());
		$data['tps'] = count($this->mTps->getAll());
		$this->load->view('dashboard/index',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */