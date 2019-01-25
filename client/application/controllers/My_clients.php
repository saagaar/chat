<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_clients extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my clients';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-clients/my_clients');
	}

}

/* End of file My_clients.php */
/* Location: ./application/controllers/My_clients.php */