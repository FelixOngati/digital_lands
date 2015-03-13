<?php
/**
* 
*/
class Viewmap extends CI_Controller
{	
	function index(){
		$data = array();
		$uname = $this->session->flashdata('uname');
		//query the db to get rfid number
        $this->load->model('map');
        $result = $this->map->get_rfid($uname);
        if ($result) {
        	foreach ($result as $row) {
        		$data['rf_id'] = $row->rf_id;
        	}
        }

		$this->load->view('templates/viewmapheader');
		$this->load->view('viewmap',$data);
		$this->load->view('templates/viewmapfooter');
		
	}
}
?>