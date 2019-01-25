<?php 

	class MY_Controller extends CI_Controller {
		function __construct() {
			parent::__construct();

			if(!is_logged_in()) {
				$this->session->set_flashdata('error', 'unauthorized login !');
				redirect('/');
			}

			$this->load_lang();
			$this->load->model('global_model');
		}

		protected function load_lang() {
			// $lang = $this->uri->segment(3) ? $this->uri->segment(3) : '';

			// $this->session->set_userdata('language', $lang);

			if(isset($lang)) {
				$this->lang->load('site', $lang);
			} else {
				$this->lang->load('site', 'english');
			}
		}

	}