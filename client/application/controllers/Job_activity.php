<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_activity extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'job activity';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/job-activity/job_activity');
	}


}

/* End of file Job_activity.php */
/* Location: ./application/controllers/Job_activity.php */