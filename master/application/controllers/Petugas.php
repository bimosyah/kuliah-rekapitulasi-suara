<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	var $title = 'Data Petugas';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDesa');
		$this->load->model('mKecamatan');
		$this->load->model('mPetugas');
		$this->load->model('mLogin');
		$this->load->library('PasswordGenerator');
	}

	public function index()
	{
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$data['title'] = $this->title;
		$data['petugas'] = $this->mPetugas->getJoin();
		$data['desa'] = $this->mDesa->getAll();
		$this->load->view('petugas/index',$data);
	}

	public function insert()
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_petugas' => $this->input->post('nama_petugas')
		);
		$insert = $this->mPetugas->insert($data);

		if ($insert) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terinput'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terinput'));	
		}
		redirect('Petugas','refresh');
	}

	public function delete($id)
	{
		$delete = $this->mPetugas->delete($id);
		if ($delete) {
			$this->mLogin->delete($id);
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terhapus'));	
		} else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terhapus'));	
		}
		redirect('Petugas','refresh');
	}

	public function edit($id)
	{
		$data['desa'] = $this->mDesa->getAll();
		$data['title'] = $this->title;
		$data['petugas'] = $this->mPetugas->getAll($id);
		$this->load->view('petugas/edit', $data);
	}

	public function update($id)
	{
		$data = array(
			'fk_id_desa' => $this->input->post('desa'),
			'nama_petugas' => $this->input->post('nama_petugas')
		);
		$update = $this->mPetugas->update($id,$data);

		if ($update) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Data sukses terupdate'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Data gagal terupdate'));	
		}
		redirect('Petugas','refresh');
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-primary">Success</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}

	public function generate_password($id)
	{
		$status_login = array('status_login' => 1);
		$update = $this->mPetugas->update($id,$status_login);
		
		$password = $this->passwordgenerator->random_password();
		$data = array(
			'fk_id_petugas' => $id,
			'username' => 'admin',
			'password' => $password
		);
		$generate = $this->mLogin->insert($data);

		if ($generate) {
			$this->session->set_flashdata('msg', $this->load_message('primary', 'Generate password sukses'));	
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'Generate password gagal'));	
		}
		redirect('Petugas','refresh');
	}

	// public function input_petugas()
	// {
	// 	$array ='';
	// 	$file_path = './assets/list.txt';
	// 	$fp = @fopen($file_path, 'r'); 
	// 	if ($fp) {
	// 		$array = explode("\n", fread($fp, filesize($file_path)));
	// 	}
	// 	$a = 8;
	// 	$insert_array = array();
		// for ($i = 0; $i <= 53; $i++) {
			
		// 	$data = array(
		// 		'fk_id_desa' => $a,
		// 		'nama_petugas' => $array[$i],
		// 		'status_login' => 1
		// 	);
		// 	$a++;
		// 	$this->db->insert('petugas', $data);
		// 	//array_push($insert_array, $data);
		// }

	// }
}

/* End of file Desa.php */
/* Location: ./application/controllers/Desa.php */