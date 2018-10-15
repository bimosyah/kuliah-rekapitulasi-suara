<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function getAll()
	{
		return $this->db->get('login');
	}

	public function getJoin()
	{
		$this->db->select('petugas.nama_petugas, username,password');
		$this->db->from('login');
		$this->db->join('petugas', 'login.fk_id_petugas = petugas.id');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('login', $data);
	}
}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */