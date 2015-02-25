<?php
/**
* 
*/
class Viewmap extends CI_Controller
{
	function index(){
		$this->load->view('templates/viewmapheader');
		$this->load->view('viewmap');
		$this->load->view('templates/viewmapfooter');
	}
}
?>