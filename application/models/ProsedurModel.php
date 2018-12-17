<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProsedurModel extends CI_Model {

	public function getProsedur($table_name){
		$get_cara = $this->db->get($table_name);
		return $get_cara->result_array();
	}

	public function addProsedur($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function ubahProsedur(){}

	public function hapusProsedur($table_name,$id){
		$this->db->where('id',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
	}
}
