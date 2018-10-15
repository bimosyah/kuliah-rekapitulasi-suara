<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
use Restserver\Libraries\REST_Controller;


class Barang extends REST_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		//Do your magic here
	}

	function index_get()
	{
		$id = $this->get('id');
		$toko = $this->get('toko');
		if ($id == '') {
			if ($toko != '') {
				$this->db->where('toko', $toko);
			}
			$barang = $this->db->get('barang')->result();
		} else {
			$this->db->where('id', $id);
			$barang = $this->db->get('barang')->result();
		}
		$this->response($barang,200);
	}

	function index_post()
	{
		$id_barang = $this->post('id');
		$request_barang = $this->post('stok');
		
		$barang = $this->getBarang($id_barang);
		foreach ($barang as $value) {
			$current_stok = $value->stok;
		}
		
		$current_stok -= $request_barang;

		$data = array('stok' => $current_stok);
		$update_stok = $this->updateStok($id_barang, $data);
		if ($update_stok) {
			$this->response($data,200);
		}else {
			$this->response(array('status' => 'fail',502));
		}

		// $data = array(
		// 	'id' => $this->post('id'),
		// 	'nip' => $this->post('nip'),
		// 	'nama' => $this->post('nama'),
		// 	'jenis_kelamin' => $this->post('jenis_kelamin'),
		// 	'tempat_lahir' => $this->post('tempat_lahir'),
		// 	'tgl_lahir' => $this->post('tgl_lahir'),
		// 	'alamat' => $this->post('alamat'),
		// 	'no_hp' => $this->post('no_hp')
		// );
		// $insert = $this->db->insert('pegawai', $data);
		// if ($insert) {
		// 	$this->response($data,200);
		// }else {
		// 	$this->response(array('status' => 'fail',502));
		// }
	}

	function index_put()
	{
		$id = $this->put('id');
		$data = array(
			'id' => $this->put('id'),
			'nip' => $this->put('nip'),
			'nama' => $this->put('nama'),
			'jenis_kelamin' => $this->put('jenis_kelamin'),
			'tempat_lahir' => $this->put('tempat_lahir'),
			'tgl_lahir' => $this->put('tgl_lahir'),
			'alamat' => $this->put('alamat'),
			'no_hp' => $this->put('no_hp')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('pegawai', $data);
		if ($update) {
			$this->response($data,200);
		}else {
			$this->response(array('status' => 'fail',502));
		}
	}

	function index_delete()
	{
		$id = $this->delete('id');
		$this->db->where('id', $id);
		$delete = $this->db->delete('pegawai');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		}else {
			$this->response(array('status' => 'fail',502));	
		}
	}

	function getBarang($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('barang')->result();
	}

	function updateStok($id,$stok)
	{
		$this->db->where('id', $id);
		$this->db->update('barang', $stok);
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */