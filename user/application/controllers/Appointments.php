<?php 

class Appointments extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'appointments';
		$this->renderTemplate('myappointments', $this->data);
	}
}
