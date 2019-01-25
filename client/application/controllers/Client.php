<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->model('global_model');

		
	}

	public function index()	
	{
		if(is_logged_in()) 
		{
			redirect($this->session->userdata('url') ? $this->session->userdata('url') : 'employee_dashboard');
		}
		$this->load->view('client/logout');
	}

	public function login() 
	{
		if(is_logged_in()) {
			redirect($this->session->userdata('url') ? $this->session->userdata('url') : 'employee_dashboard');
		}

		$params = [];
		$data = [];
		$this->input->post('password');
		$params = array(	
			'select' => '*',
			'table' => 'employee',
			'where' => array(
				'login' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'is_deleted' => 0
			)
		);
		$data['user_info'] = $this->global_model->select($params)->row();
		
		if(empty($data['user_info'])) {
			$this->session->set_flashdata('error', 'Username / Password does not match. Please try again !');
			redirect('/');
		}

		$this->session->set_userdata('employee_data', array('user_info' => $data['user_info']));
		print_r($this->session->userdata('employee_data'));
		redirect('employee_dashboard');
	}

	public function logout() 
	{
		$this->session->unset_userdata('employee_data');
		$this->session->sess_destroy();
		redirect('/');
	}

}

/* End of file Client.php */
/* Location: ./application/controllers/Client.php */