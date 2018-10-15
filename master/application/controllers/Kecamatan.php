<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	var $title = 'Data Kecamatan';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKecamatan');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$this->load->view('Kecamatan/index',$data);
	}

	public function insert()
	{
		$data = array(
			'nama_kecamatan' => $this->input->post('nama_kecamatan')
		);
		$insert = $this->mKecamatan->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('Kecamatan','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mKecamatan->delete($id);
		if ($delete) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('Kecamatan','refresh');
	}

	public function edit($id)
	{
		$data['title'] = $this->title;
		$data['kecamatan'] = $this->mKecamatan->getAll($id);
		$this->load->view('Kecamatan/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'nama_kecamatan' => $this->input->post('nama_kecamatan')
		);
		$update = $this->mKecamatan->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('Kecamatan','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}
}

/* End of file Kecamatan.php */
/* Location: ./application/controllers/Kecamatan.php */