<?php 

class Posts extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['active_side'] = 'posts';
		$this->renderTemplate('myposts', $this->data);
	}
}
