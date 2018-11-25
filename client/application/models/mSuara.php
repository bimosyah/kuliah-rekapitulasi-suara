<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSuara extends CI_Model {

	public function insert($data)
	{
		return $this->db->insert('rekap_suara', $data);
	}	

}

/* End of file mSuara.php */
/* Location: ./application/models/mSuara.php */