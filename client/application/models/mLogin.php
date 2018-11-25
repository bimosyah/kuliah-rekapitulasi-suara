<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {
	
	public function login($username,$password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('login');
		return $query;
	}	

	public function getJoin($fk_id_petugas)
	{
		$this->db->select('fk_id_desa,nama_petugas');
		$this->db->from('petugas');
		$this->db->join('login', 'login.fk_id_petugas = petugas.id');
		$this->db->where('login.fk_id_petugas', $fk_id_petugas);
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */