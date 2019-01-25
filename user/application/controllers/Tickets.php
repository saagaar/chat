<?php 

class Tickets extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'tickets';
		$this->renderTemplate('supportticket', $this->data);
	}
}
