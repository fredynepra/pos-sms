<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('supplier');

		$data = $this->db->get();

		return $data->result();
	}

	public function getAlamat($data) {
		$sql = "SELECT Alamat AS alamat FROM supplier WHERE Kode = '" .$data['kode'] ."'";
		$data = $this->db->query($sql);

		return $data->result();
	}

}
