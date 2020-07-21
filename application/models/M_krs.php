<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class M_krs extends CI_Model {

		public $table ="tbl_krs";

		public function data() {
		$query = "SELECT * FROM $this->table ORDER BY kd_krs ASC";
		return $this->db->query($query)->result();
		}


		public function simpan() {
		$data = array(
		'kd_krs' => $this->input->post('kd_krs'),
		'kode_mk' => $this->input->post('kode_mk'),
		'nid' => $this->input->post('nid'),
		'ruang' => $this->input->post('ruang'),
		'jam_kuliah' => $this->input->post('jam_kuliah'),		
		);
		$this->db->insert($this->table, $data);
	}


	public function ubah() {
		$data = array(
			'ruang' => $this->input->post('ruang'),
			'jam_kuliah' => $this->input->post('jam_kuliah')
		);
		$krs = $this->input->post('kd_krs');
		$this->db->where('kd_krs', $krs);
		$this->db->update($this->table, $data);
	}
	
	}
		