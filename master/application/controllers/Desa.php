<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {

	var $title = 'Data Desa';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDesa');
		$this->load->model('mKecamatan');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['desa'] = $this->mDesa->getJoin();
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$this->load->view('Desa/index',$data);
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
		redirect('Desa','refresh');
	}

	public function edit($id)
	{
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$data['title'] = $this->title;
		$data['desa'] = $this->mDesa->getAll($id);
		$this->load->view('Desa/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'fk_id_kecamatan' => $this->input->post('kecamatan'),
			'nama_desa' => $this->input->post('nama_desa')
		);
		$update = $this->mDesa->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('Desa','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */