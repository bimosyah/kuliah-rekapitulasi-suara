<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TPS extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTps');
		$this->load->model('mDesa');
		$this->load->model('mCalon');

	}
	public function index()
	{
		if ($this->session->userdata('login') == FALSE) {
			redirect('Login','refresh');
		}
		
		$data['title'] = "Dashboard";
		$id_desa = $this->session->userdata('fk_id_desa');
		$desa = $this->mDesa->getAll($id_desa);
		foreach ($desa as $value) {
			$nama_desa = $value->nama_desa;
		}

		$tps = $this->mTps->getAll($id_desa);
		$data['nama_desa'] = $nama_desa;
		$jumlah_tps = count($tps);
		$data['jumlah_tps']  = $jumlah_tps;

		$form_input = '';

		$i = 0;
		foreach ($tps as $value) {
			$form_input .= '				
			<div class="col-lg-6">
			<div class="card">
			<div class="card-header">
			<strong>Form</strong><small> Input</small>
			</div>
			<div class="card-body">
			<form action="http://localhost/rekapitulasi-suara/client/Suara/insert" method="post" accept-charset="utf-8">
			<div class="form-group">
			<label for="TPS" class="control-label mb-1">Calon</label>
			<select class="form-control" id=calon'.$i.' name="fk_id_calon">
			</select>
			</div>
			<div class="form-group">
			<label for="TPS" class="control-label mb-1">Total suara</label>
			<input class="form-control" type="number" name="jml_suara">
			<input class="form-control" value='.$value->id.' type="hidden" name="fk_id_tps">
			</div>
			<button type="Submit" id="btn-submit" class="btn btn-primary"><i class="fa fa-cloud-upload"></i>&nbsp; Submit</button>
			</form>
			</div>
			</div>
			</div>';
			$i++;
		}
		for ($i = 0; $i < $jumlah_tps ; $i++) {

			
		}

		$data['form_input'] = $form_input;
		$data['calon'] = $this->mCalon->getAll();


		$this->load->view('suara/index',$data);	
	}

}

/* End of file TPS.php */
/* Location: ./application/controllers/TPS.php */