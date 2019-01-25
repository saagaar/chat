<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_payments extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my payments';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-payments/my_payments');
	}

}

/* End of file My_payments.php */
/* Location: ./application/controllers/My_payments.php */