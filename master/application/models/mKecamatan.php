<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKecamatan extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('kecamatan')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('kecamatan')->result();
		}
	}	

	public function insert($data)
	{
		return $this->db->insert('kecamatan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('kecamatan');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('kecamatan', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */