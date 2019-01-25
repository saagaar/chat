<?php 

class Dashboard extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		$this->load->model('usercompany_model');
		$this->load->model('service_model');
		$this->load->model('auth_model');
		$this->load->model('job_model');

		// $this->notLoggedIn();
	}

	public function index()
	{
		// right sidebar active
		$this->data['active_side'] = 'dashboard';

		$user_id = $this->session->userdata('id');
		// $user_id = 1;

		/*
		MY FAVORITE
		*/
		// My companies data
		
		$this->data['employee_data'] = $this->usercompany_model->getUserFavEmployeeCompanyData($user_id);
		// my servies data
		$this->data['user_fav_service'] = $this->service_model->getUserFavServiceData($user_id);
		// my items data

		/*
		* Services offer
		*/
		// servicer offer data
		$this->data['service_offer_data'] = $this->service_model->getServerOfferData();
		// item offers data

		
		/*
		* Job Offers 
		*/
		// job offer data
		$this->data['job_offer_data'] = $this->job_model->getJobOffer();

		/*
		* My settings
		*/
		// profile information
		$this->data['user_info'] = $this->auth_model->getUserData($user_id);
		// Recent Activity

		$this->renderTemplate('home', $this->data);
	}
}