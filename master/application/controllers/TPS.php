<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TPS extends CI_Controller {

	var $title = 'Data TPS';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDesa');
		$this->load->model('mTps');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['tps'] = $this->mTps->getJoin();
		$data['desa'] = $this->mDesa->getAll();
		$this->load->view('tps/index',$data);
	}

	public function insert()
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_tps' => $this->input->post('nama_tps'),
			'jml_dpt' => $this->input->post('jml_dpt')
		);
		$insert = $this->mTps->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('TPS','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mTps->delete($id);
		if ($delete) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('Desa','refresh');
	}

	public function edit($id)
	{
		$data['desa'] = $this->mDesa->getAll();
		$data['title'] = $this->title;
		$data['tps'] = $this->mTps->getAll($id);
		$this->load->view('tps/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_tps' => $this->input->post('nama_tps'),
			'jml_dpt' => $this->input->post('jml_dpt')
		);
		$update = $this->mTps->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('TPS','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */