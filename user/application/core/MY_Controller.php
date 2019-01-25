<?php 

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->library('session');
		
		$this->load->model('auth_model');
	}
	
}

class Users_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('auth_model');


		$user_id = base64_decode($this->input->get('id'));
		$check=$this->auth_model->getUserData($user_id);
		if(!empty($user_id)) {
			$session_data = array(
				'id' => $user_id,
				'email'=>$check['email'],
				'name'=>$check['first_name'].' '.$check['last_name'],
				'username'=>$check['username'],
				'profile_picture'=>$check['profile_picture'],
				'logged_in' => TRUE
			);	

			$this->session->set_userdata($session_data);
		}
		
		$this->notLoggedIn();
	}
	
	public function renderTemplate($page = 'home', $data = '')
	{
		$user_id = $this->session->userdata('id');
		$this->data['aside_userinfo'] = $this->auth_model->getUserData($user_id);

		$this->load->view('users/templates/header', $this->data);
		$this->load->view('users/'.$page, $data);
		$this->load->view('users/templates/footer', $data);
	}

	public function isLoggedIn()
	{
		$isLoggedIn = $this->session->userdata('logged_in');
		// if($isLoggedIn === true) {
		// 	redirect('dashboard', 'refresh');
		// }	
	}

	public function notLoggedIn() 
	{	
		// $check = $this->session->userdata('logged_in');		
		
		// if($check == false) {
		// 	header("Location: http://myservicescout.de");
		// }
		if($this->session->userdata('logged_in') != true) {
			header("Location: http://myservicescout.de");
		}
	}
}
