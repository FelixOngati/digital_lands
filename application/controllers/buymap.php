<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buymap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["title"] = "Digital Lands";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('buymap');
		$this->load->view('templates/footer');
	}
	public function place_request(){
		//echo $this->session->userdata('frid');
		$this->load->model('map');
		$this->map->insert_buy_request($this->session->userdata('frid'));		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */