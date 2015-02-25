<?php
class Girls extends CI_Controller{
	public function show($id){
		$this->load->model('girls_model');
		$girl = $this->girls_model->get_girl($id);
		$data['name'] = $girl['name'];
		$data['character'] = $girl['character'];
		$this->load->view('my_girls',$data);
	}
}