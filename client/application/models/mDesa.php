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
}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */