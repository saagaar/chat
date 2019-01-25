<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_history extends MY_Controller {

	public function index()	{
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'purchase history';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$this->load->view('client/purchase-history/purchase_history');
	}

}

/* End of file Purchase_history.php */
/* Location: ./application/controllers/Purchase_history.php */