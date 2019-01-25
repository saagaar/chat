<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_coins extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my coins';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-coins/my_coins');
	}

}

/* End of file My_coins.php */
/* Location: ./application/controllers/My_coins.php */