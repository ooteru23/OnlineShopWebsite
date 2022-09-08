<?php

class Model_kategori extends CI_Model{
	public function data_kopi(){
		return $this->db->get_where("tb_barang",array('kategori' => 'kopi'));
	}

	public function data_bubuk(){
		return $this->db->get_where("tb_barang",array('kategori' => 'bubuk'));
	}

	public function data_sirup(){
		return $this->db->get_where("tb_barang",array('kategori' => 'sirup'));
	}
}