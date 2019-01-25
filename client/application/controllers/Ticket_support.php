<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_support extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'ticket support';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/ticket-support/ticket_support');
	}

}

/* End of file Ticket_support.php */
/* Location: ./application/controllers/Ticket_support.php */