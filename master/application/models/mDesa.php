<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDesa extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('desa')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('desa')->result();
		}
	}	

	public function getJoin()
	{
		$this->db->select('desa.id,nama_desa, kecamatan.nama_kecamatan');
		$this->db->from('desa');
		$this->db->join('kecamatan', 'desa.fk_id_kecamatan = kecamatan.id');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('desa', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('desa');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('desa', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */