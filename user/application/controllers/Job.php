<?php 

class Job extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'job';
		$this->renderTemplate('myjobtasks', $this->data);
	}

	
}
