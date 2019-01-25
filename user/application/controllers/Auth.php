<?php 

class Auth extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->load->model('auth_model');
		
		$result = array('success' => false, 'messages' => array());

		$validate = array(
			array(
				'field' => 'login_email',
				'label' => 'Email',
				'rules' => 'required|valid_email',
			),
			array(
				'field' => 'login_password',
				'label' => 'Password',
				'rules' => 'required',
			)
		);

		$this->form_validation->set_rules($validate);
		$this->form_validation->set_error_delimiters('<p class="label label-danger text-danger">','</p>');

		if($this->form_validation->run() === true) {
			// check if email exists
			$check = $this->auth_model->check($this->input->post('login_email'), $this->input->post('login_password'));
			if($check) {
				// now create a session
				
				$session_data = array(
					'id' => $check['id'],
					'email'=>$check['email'],
					'profile_picture'=>$check['profile_picture'],
					'name'=>$check['first_name'].' '.$check['last_name'],
					'username'=>$check['username'],
					'logged_in' => TRUE
				);	

				$this->session->set_userdata($session_data);

				$result['success'] = true;
				$result['messages'] = base_url('dashboard');
			}
			else {
				$result['success'] = false;
				$result['messages'] = '<p class="label label-danger">Invalid email, or password</p>';
			}
		}
		else {
			$result['success'] = false;
			foreach ($_POST as $key => $value) {
				$result['messages'][$key] = form_error($key);
			}			
		}

		echo json_encode($result);

	}

	public function signup()
	{
		$this->load->model('auth_model');
		
		$result = array('success' => false, 'messages' => array());

		$validate = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[user.email]',
			),
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|alpha_dash',
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|matches[cpassword]',
			),
			array(
				'field' => 'cpassword',
				'label' => 'Confirm Password',
				'rules' => 'required',
			)
		);

		$this->form_validation->set_rules($validate);
		$this->form_validation->set_message('is_unique', 'The {field} already exists');
		$this->form_validation->set_error_delimiters('<p class="label label-danger text-danger">','</p>');

		if($this->form_validation->run() === true) {
			try {
				$password = $this->getpassword($this->input->post('password'));

				$data = array(
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => $password,
					'registration_date' => date('Y-m-d')
				);

				$insert_data = $this->auth_model->signup($data);
				if($insert_data == true) {
					$result['success'] = 'true';
					$result['messages'] = 'Successfully created';
				}
				else {
					$result['success'] = 'false';
					$result['messages'] = 'Error while creating';
				}
			}
			catch(Exception $e) {
				$result['success'] = false;
				$result['messages'] = $e->getMessage();
			}
		}
		else {
			$result['success'] = false;
			foreach ($_POST as $key => $value) {
				$result['messages'][$key] = form_error($key);
			}			
		}

		echo json_encode($result);

	}

	public function getpassword($password)
	{ 
		if($password) {
			$get_password = password_hash($password, PASSWORD_DEFAULT);
			return $get_password;
		}
	}

	public function logout()
	{
		$session_items = array('id', 'logged_in');
		$this->session->unset_userdata($session_items);
		$this->session->sess_destroy();
		// redirect('home', 'refresh');
		// header("Location: http://myservicescout.de");
	}
}