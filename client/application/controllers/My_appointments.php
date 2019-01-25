<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_appointments extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my appointments';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-appointments/my_appointments');
	}

}

/* End of file My_appointments.php */
/* Location: ./application/controllers/My_appointments.php */