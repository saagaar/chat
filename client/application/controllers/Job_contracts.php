<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_contracts extends MY_Controller {

	public function index()	{
		if(is_logged_in() == TRUE) {
			$this->session->set_userdata('side_nav', 'job contracts');

			$this->load->view('client/job-contracts/job_contracts');
		} else {
			$this->session->set_userdata('error', 'unauthorized login !');
			redirect('/');
		}
	}

}

/* End of file Job_contracts.php */
/* Location: ./application/controllers/Job_contracts.php */