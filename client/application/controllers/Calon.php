<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCalon');
	}

	public function index()
	{
		
	}

	function getCalon()
	{
		$calon = $this->mCalon->getAll();
		foreach ($calon as $value) {
			echo '<option value = "'.$value->id.'">'.$value->no_urut.' - '.$value->nama_calon.' - '.$value->nama_wakil_calon.'</option>';
		}
	}

}

/* End of file Calon.php */
/* Location: ./application/controllers/Calon.php */