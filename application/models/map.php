<?php

/**
* 
*/
class Map extends CI_Model
{
	
	function get_rfid($argument)
	{
		$this -> db -> select('u_id,u_name,rf_id');
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
}
?>