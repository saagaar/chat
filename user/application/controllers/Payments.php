<?php 

class Payments extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'payments';
		$this->renderTemplate('mypayments', $this->data);
	}
}
