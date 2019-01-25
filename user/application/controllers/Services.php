<?php 

class Services extends User_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_service');
	}

	public function favoriteService($userId, $serviceId)
	{
		if($userId && $serviceId) {
			$check = $this->model_service->favoriteService($userId, $serviceId);

			if($check == true) {
				return true;
			}
			else {
				return false;
			}
		}
	}
}