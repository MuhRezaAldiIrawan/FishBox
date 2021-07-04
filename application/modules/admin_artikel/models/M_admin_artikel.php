<?php
class M_admin_artikel extends CI_Model {
	public function get() {
        return $this->db->get('artikel');
	}
	
	public function get_where($id) {
        return $this->db->get_where('artikel', array('id' => $id));
	}
	
	public function get_slug($slug) {
        return $this->db->get_where('artikel', array('slug' => $slug));
	}
	
	public function hapus_artikel($id){
		$this->db->where('id', $id);
		return $this->db->delete('artikel');
	}
	
	public function edit($id){
		$this->db->where('id', $id);
		return $this->db->update('artikel', $data);
	}
	
	public function dilihat(){
		$this->db->order_by('dilihat', 'DESC');
		return $this->db->get('artikel');
	}
	//public function edit_data($where, $table){
	//	return $this->db->get_where($table, $where);
	//}
}