<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {

	var $title = 'Data Calon';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mCalon');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['calon'] = $this->mCalon->getAll();
		$this->load->view('calon/index',$data);
	}

	public function insert()
	{
		$data = array(
			'no_urut' => $this->input->post('no_urut'),
			'nama_calon' => $this->input->post('nama_calon'),
			'nama_wakil_calon' => $this->input->post('nama_wakil_calon')
		);
		$insert = $this->mCalon->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('Calon','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mCalon->delete($id);
		if ($delete) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('Calon','refresh');
	}

	public function edit($id)
	{
		$data['title'] = $this->title;
		$data['calon'] = $this->mCalon->getAll($id);
		$this->load->view('calon/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'no_urut' => $this->input->post('no_urut'),
			'nama_calon' => $this->input->post('nama_calon'),
			'nama_wakil_calon' => $this->input->post('nama_wakil_calon')
		);
		$update = $this->mCalon->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('Calon','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}
}

/* End of file Calon.php */
/* Location: ./application/controllers/Calon.php */