<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	var $title = 'Data Login';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPetugas');
		$this->load->model('mLogin');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['login'] = $this->mLogin->getJoin();
		$data['petugas'] = $this->mPetugas->getAll();
		$this->load->view('Login/index',$data);
	}

	public function insert()
	{
		$data = array(
			'fk_id_kecamatan' => $this->input->post('kecamatan'),
			'nama_desa' => $this->input->post('nama_desa')
		);
		$insert = $this->mDesa->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('Desa','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mDesa->delete($id);
		if ($delete) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('Login','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */