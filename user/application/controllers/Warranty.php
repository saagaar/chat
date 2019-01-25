<?php 

class Warranty extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'warranty';
		$this->renderTemplate('mywarranty', $this->data);
	}
}
