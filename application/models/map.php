<?php

/**
* 
*/
class Map extends CI_Model
{
	
	function get_rfid($argument)
	{
		$this -> db -> select('u_id,f_name,l_name,u_name,rf_id,user_type,residence,occupation,id_number,phone');
        $this->db->from('tblUsers');
        $this->db->where('u_name',$argument);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows()==1){
            return $query->result();
        }  else {
            return false;
        }
	}

    function myland_details($rf_id){
        $this -> db -> select('*');
        $this->db->from('lands');
        $this->db->where('rf_id',$rf_id);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows()==1){
            return $query->result();
        }  else {
            return false;
        }
    }
}
?>