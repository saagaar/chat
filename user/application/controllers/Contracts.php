<?php 

class Contracts extends Users_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'contracts';
		$this->renderTemplate('mycontracts', $this->data);
	}
}