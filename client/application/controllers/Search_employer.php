<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_employer extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'search employer';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/search-employer/search_employer');
	}

}

/* End of file Search_employer.php */
/* Location: ./application/controllers/Search_employer.php */