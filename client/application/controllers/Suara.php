<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSuara');
	}

	public function insert()
	{
		$data = array(
			'fk_id_tps' => $this->input->post('fk_id_tps'),
			'fk_id_calon' => $this->input->post('fk_id_calon'),
			'jml_suara' => $this->input->post('jml_suara')
		);
		$insert = $this->mSuara->insert($data);
		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
			redirect('TPS','refresh');
		}
		
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}

}

/* End of file Suara.php */
/* Location: ./application/controllers/Suara.php */