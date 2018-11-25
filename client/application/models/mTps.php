<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTps extends CI_Model {
	
	public function getAll($id = '')
	{
		if (empty($id)) {
			return $this->db->get('tps')->result();
		}else {
			$this->db->where('fk_id_desa', $id);
			return $this->db->get('tps')->result();
		}
	}	
}

/* End of file mCalon.php */
/* Location: ./application/models/mCalon.php */