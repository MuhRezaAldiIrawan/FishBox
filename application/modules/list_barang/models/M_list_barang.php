<?php
class M_list_barang extends CI_Model {
	public function tampil() {
        return $this->db->get('barang');
	}
}