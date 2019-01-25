<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_reviews extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'my reviews';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/my-reviews/my_reviews');
	}

}

/* End of file My_reviews.php */
/* Location: ./application/controllers/My_reviews.php */