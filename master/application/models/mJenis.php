<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MJenis extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('jenis_pemilu')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('jenis_pemilu')->result();
		}
	}	

	public function insert($data)
	{
		return $this->db->insert('jenis_pemilu', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('jenis_pemilu');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('jenis_pemilu', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */