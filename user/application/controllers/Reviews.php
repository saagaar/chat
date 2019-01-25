<?php 

class Reviews extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'reviews';
		$this->renderTemplate('myreviews', $this->data);
	}
}
