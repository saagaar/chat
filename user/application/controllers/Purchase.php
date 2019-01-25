<?php 

class Purchase extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'purchase';
		$this->renderTemplate('mypurchase', $this->data);
	}
}
