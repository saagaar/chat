<?php 

class Proposals extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'proposals';
		$this->renderTemplate('myproposals', $this->data);
	}
}
