<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSuara extends CI_Model {

	public function getAll()
	{
		$this->db->select('nama_calon,nama_wakil_calon,no_urut,fk_id_calon,jml_suara');
		$this->db->from('calon');
		$this->db->join('rekap_suara', 'calon.id = rekap_suara.fk_id_calon');
		$this->db->order_by('fk_id_calon', 'asc');
		return $this->db->get()->result();
	}	

	public function getIdCalon()
	{
		$this->db->distinct();
		$this->db->select('fk_id_calon');
		return $this->db->get('rekap_suara')->result();
	}

	public function getSuara($id = '')
	{
		if ($id == '') {
			$this->db->select_sum('jml_suara');
		}
		else {
			$this->db->select_sum('jml_suara');
			$this->db->where('fk_id_calon', $id);
		}
		$query = $this->db->get('rekap_suara')->result();

		foreach ($query as $value) {
			$jumlah_suara = $value->jml_suara;
		}
		return $jumlah_suara;
	}

	public function getSuaraGolput()
	{
		$suara_masuk = $this->getSuara();

		$this->db->select_sum('jml_dpt');
		$query = $this->db->get('tps')->result();

		foreach ($query as $value) {
			$total_dpt = $value->jml_dpt;
		}

		return $total_dpt - $suara_masuk;
		
	}

}

/* End of file mSuara.php */
/* Location: ./application/models/mSuara.php */