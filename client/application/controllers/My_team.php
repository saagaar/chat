<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_team extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my team';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-team/my_team');
	}

}

/* End of file My_team.php */
/* Location: ./application/controllers/My_team.php */