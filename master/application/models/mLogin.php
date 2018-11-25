<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	public function getAll()
	{
		return $this->db->get('login');
	}

	public function getJoin()
	{
		$this->db->select('petugas.nama_petugas, username,password,desa.nama_desa,kecamatan.nama_kecamatan');
		$this->db->from('login');
		$this->db->join('petugas', 'login.fk_id_petugas = petugas.id');
		$this->db->join('desa', 'petugas.fk_id_desa = desa.id');
		$this->db->join('kecamatan', 'desa.fk_id_kecamatan = kecamatan.id');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('login', $data);
	}

	public function delete($id){
		$this->db->where('fk_id_petugas', $id);
		return $this->db->delete('login');
	}
}

/* End of file mLogin.php */
/* Location: ./application/models/mLogin.php */