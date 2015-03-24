<?php
	/**
	* 
	*/
	class LandRegistry extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('logged_in')) {
			redirect('login');
			}
		}
		function index(){
			$this->load->view('grid.html');
		}
	}
?>