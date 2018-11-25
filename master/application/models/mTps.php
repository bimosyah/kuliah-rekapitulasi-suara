<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTps extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('tps')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('tps')->result();
		}
	}	

	public function getJoin()
	{
		$this->db->select('tps.id,nama_tps, desa.nama_desa,jml_dpt,kecamatan.nama_kecamatan,lokasi');
		$this->db->from('tps');
		$this->db->join('desa', 'tps.fk_id_desa = desa.id');
		$this->db->join('kecamatan', 'desa.fk_id_kecamatan = kecamatan.id');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('tps', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tps');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tps', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */