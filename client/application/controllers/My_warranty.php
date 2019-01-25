<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_warranty extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my warranty';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-warranty/my_warranty');
	}

}

/* End of file My_warranty.php */
/* Location: ./application/controllers/My_warranty.php */