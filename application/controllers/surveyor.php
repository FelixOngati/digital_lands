<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveyor extends CI_Controller {
	 */
	public function index()
	{
		$data["title"] = "Digital Lands";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('buymap');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */