<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_income extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my income';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-income/my_income');
	}

}

/* End of file My_income.php */
/* Location: ./application/controllers/My_income.php */