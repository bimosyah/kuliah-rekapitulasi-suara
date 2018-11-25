<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TPS extends CI_Controller {

	var $title = 'Data TPS';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDesa');
		$this->load->model('mKecamatan');
		$this->load->model('mTps');
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['tps'] = $this->mTps->getJoin();
		$data['desa'] = $this->mDesa->getAll();
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$this->load->view('tps/index',$data);
	}

	public function insert()
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_tps' => $this->input->post('nama_tps'),
			'jml_dpt' => $this->input->post('jml_dpt'),
			'lokasi' => $this->input->post('lokasi')
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
		redirect('TPS','refresh');
	}

	public function edit($id)
	{
		$data['desa'] = $this->mDesa->getAll();
		$data['title'] = $this->title;
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$data['tps'] = $this->mTps->getAll($id);
		$this->load->view('tps/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_tps' => $this->input->post('nama_tps'),
			'jml_dpt' => $this->input->post('jml_dpt'),
			'lokasi' => $this->input->post('lokasi')
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

	function getDesa()
	{
		$id_kecamatan = $this->input->post('id_kecamatan');
		$desa = $this->mDesa->getDesa($id_kecamatan);
		foreach ($desa as $value) {
			echo '<option value = "'.$value->id.'">'.$value->nama_desa.'</option>';
		}
	}

	public function input_tps()
	{
		
	}
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */