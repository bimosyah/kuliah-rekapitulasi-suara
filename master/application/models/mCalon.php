<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCalon extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('calon')->result();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('calon')->result();
		}
	}	

	public function insert($data)
	{
		return $this->db->insert('calon', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('calon');
	}

	public function update($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('calon', $data);
	}

}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */