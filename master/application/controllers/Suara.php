<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suara extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSuara');
		$this->load->model('mCalon');
		$this->load->model('mKecamatan');
	}

	public function index()
	{
		$data['kecamatan'] = $this->mKecamatan->getAll();
		$data['title'] = "Data Suara";
		$this->load->view('suara/index', $data);		
	}

	public function getSuara()
	{
		$getData = $this->mSuara->getAll();
		$id_calon = $this->mSuara->getIdCalon();

		$responce->cols[] = array( 
			"label" => "No Urut Calon", 
			"type" => "string" 
		); 
		
		$responce->cols[] = array( 
			"label" => "Perolehan Suara", 
			"type" => "number" 
		);

		foreach ($id_calon as $value) {
			
			$responce->rows[]["c"] = array( 
				array( 
					"v" => "Pasangan No Urut ".$value->fk_id_calon,
				), 
				array( 
					"v" => (int)$this->mSuara->getSuara($value->fk_id_calon), 
				) 
			); 
		}

		echo json_encode($responce);
	}

	public function getGolput()
	{
		$getData = $this->mSuara->getAll();
		$id_calon = $this->mSuara->getIdCalon();

		$responce->cols[] = array( 
			"label" => "nama", 
			"type" => "string" 
		); 
		
		$responce->cols[] = array( 
			"label" => "total", 
			"type" => "number" 
		);

		$i = 0;
		foreach ($id_calon as $value) {
			if ($i == 0) {
				$nama = "Menggunakan Suara";
				$suara = $this->mSuara->getSuara();
			}else {
				$nama = "Tidak Menggunakan Suara";
				$suara = $this->mSuara->getSuaraGolput();
			}
			$responce->rows[]["c"] = array( 
				array( 
					"v" => $nama,
				), 
				array( 
					"v" => (int)$suara, 
				) 
			); 
			$i++;
		}

		echo json_encode($responce);
	}

}

/* End of file Suara.php */
/* Location: ./application/controllers/Suara.php */