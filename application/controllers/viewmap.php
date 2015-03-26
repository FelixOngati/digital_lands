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
		$data['myclass'] = $this;
		$uname = $this->session->userdata('uname');
		//query the db to get rfid number
        $this->load->model('map');
        $result = $this->map->get_rfid($uname);
        if ($result) {
        	foreach ($result as $row) {
        		$this->session->set_userdata('frid',$row->rf_id);
        		$data['rf_id'] = $row->rf_id;
        		$data['fname'] = $row->f_name;
        		$data['lname'] = $row->u_name;
        		$data['user_id'] = $row->id_number;
        	}
        }
		$this->load->view('templates/viewmapheader');
		$this->load->view('viewmap',$data);
		$this->load->view('templates/viewmapfooter');		
	}

	function parse_my_lands($args){
		$this->load->model('map');
		$result = $this->map->all_my_lands($args);
		return $result;
	}

	function getland($args){
		$data = array();
		$data['myclass'] = $this;
		$uname = $this->session->userdata('uname');
		//query the db to get rfid number
        $this->load->model('map');
        $result = $this->map->getthisland($args);
        if ($result) {
        	foreach ($result as $row) {
        		$this->session->set_userdata('frid',$row->rf_id);
        		$data['rf_id'] = $row->rf_id;
        		$data['fname'] = $row->f_name;
        		$data['lname'] = $row->u_name;
        		$data['user_id'] = $row->id_number;
        	}
        }
		$this->load->view('templates/viewmapheader');
		$this->load->view('viewmap',$data);
		$this->load->view('templates/viewmapfooter');		
	}
}
?>