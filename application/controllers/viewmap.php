<?php
/**
* 
*/
class Viewmap extends CI_Controller
{	

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('logged_in')) {
			redirect('login');
		}
	}
	function index(){
		$data = array();
		$uname = $this->session->userdata('uname');
		//query the db to get rfid number
        $this->load->model('map');
        $result = $this->map->get_rfid($uname);
        if ($result) {
        	foreach ($result as $row) {
        		$data['rf_id'] = $row->rf_id;
        		$data['fname'] = $row->f_name;
        		$data['lname'] = $row->u_name;
        	}
        }
		$this->load->view('templates/viewmapheader');
		$this->load->view('viewmap',$data);
		$this->load->view('templates/viewmapfooter');		
	}
}
?>