<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	var $title = 'Jenis Pemilu';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mJenis');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['jenis'] = $this->mJenis->getAll();
		$this->load->view('jenis/index',$data);
	}

	public function insert()
	{
		$data = array(
			'nama_pemilu' => $this->input->post('nama_pemilu'),
			'tgl' => $this->input->post('tgl')
		);
		$insert = $this->mJenis->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('jenis','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mJenis->delete($id);
		if ($delete) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('jenis','refresh');
	}

	public function edit($id)
	{
		$data['title'] = $this->title;
		$data['jenis'] = $this->mJenis->getAll($id);
		$this->load->view('jenis/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'nama_pemilu' => $this->input->post('nama_pemilu'),
			'tgl' => $this->input->post('tgl')
		);
		$update = $this->mJenis->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('jenis','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}

}

/* End of file Jenis.php */
/* Location: ./application/controllers/Jenis.php */