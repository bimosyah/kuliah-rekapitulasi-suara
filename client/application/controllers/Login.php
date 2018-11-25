<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');

	}

	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			redirect('Dashboard','refresh');
		}
		$this->load->view('login/index');

	}	

	public function cekLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');	
		$fk_id_petugas = '';
		$fk_id_desa = '';
		$nama_petugas = '';

		$query = $this->mLogin->login($username,$password);
		if ($query->num_rows() > 0) {
			//ambil id petugas;
			foreach ($query->result() as $value) {
				$fk_id_petugas = $value->fk_id_petugas;
			}

			//ambil id desa tempat petugas bertugas;
			$query = $this->mLogin->getJoin($fk_id_petugas);
			foreach ($query as $value) {
				$fk_id_desa = $value->fk_id_desa;
				$nama_petugas = $value->nama_petugas;
			}

			$data_petugas = array(
				'nama_petugas' 	=> $nama_petugas,
				'fk_id_petugas' => $fk_id_petugas,
				'fk_id_desa' 	=> $fk_id_desa,
				'login' 		=> TRUE
			);

			$this->session->set_userdata($data_petugas);
			redirect('Dashboard','refresh');
		}else {
			$this->session->set_flashdata('msg', $this->load_message('danger', 'login gagal'));	
			redirect('Login','refresh');
		}
	}

	function load_message($jenis,$isi)
	{
		$pesan = '<div class="sufee-alert alert with-close alert-'.$jenis.' alert-dismissible fade show"><span class="badge badge-pill badge-danger">X</span> '.$isi.'.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $pesan;
	}

	public function logout()
	{
		$data_petugas = array(
			'nama_petugas' 	=> '',
			'fk_id_petugas' => '',
			'fk_id_desa' 	=> '',
			'login' 		=> FALSE
		);
		$this->session->unset_userdata($data_petugas);
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
