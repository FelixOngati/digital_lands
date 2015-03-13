<?php
class Login extends CI_Controller{
	function index(){
		$data["title"] = "Digital Lands";
		$this->load->view('templates/login_header',$data);
		$this->load->view('templates/nav');		
		$this->load->view('login_form');
		//$this->load->view('templates/footer');
	}
	function validate_credentials(){
            //this method will have the credentials validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
            $this->form_validation->set_rules('password','Password','trim|required|xss_clean');
            $this->form_validation->run();
            
            //field validation succeeded, check against database
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            //$data_1['name'] = $username;
            
            //query the db
            $this->load->model('user');
            $result = $this->user->login($username,$password);
            
            if($result){
                $sess_array = array();
                foreach ($result as $row){
                    $sess_array = array(
                        'id' => $row->u_id,
                        'username' => $row->u_name
                    );
                    $this->session->set_userdata('logged_in',$sess_array);
                    
                    if($row->user_type == 'public'){
                        $this->session->set_flashdata('uname',$username);
                        redirect('viewmap','refresh');
                    }elseif ($row->user_type == 'surveyor') {
                        redirect('design_map','refresh');
                    }
                }                
                 
            }else{
              $this->form_validation->set_message('check_database', 'Invalid username or password');
              $this->load->view('templates/login_header');
              $this->load->view('templates/nav');
              $this->load->view('login_form');
            }
            
            
        }
        
        
}