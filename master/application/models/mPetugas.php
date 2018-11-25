<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPetugas extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('petugas')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('petugas')->result();
		}
	}	

	public function getJoin()
	{
		$this->db->select('petugas.id,nama_petugas, desa.nama_desa,status_login,kecamatan.nama_kecamatan');
		$this->db->from('petugas');
		$this->db->join('desa', 'petugas.fk_id_desa = desa.id');
		$this->db->join('kecamatan', 'kecamatan.id = desa.fk_id_kecamatan', 'left');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('petugas', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('petugas');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('petugas', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */