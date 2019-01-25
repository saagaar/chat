<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_offers extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'job offers';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/job-offers/job_offers');
	}

}

/* End of file Job_offers.php */
/* Location: ./application/controllers/Job_offers.php */