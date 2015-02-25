<?php
class Girls_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_girl($id){
		if ($id != FALSE) {
			$query = $this->db->get_where('people',array('id' => $id));
			return $query->row_array();
		}else{
			return FALSE;
		}
	}
}