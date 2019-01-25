<?php 

class Auth_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function signup($data = array())
	{
		if($data)
		{
			$result = $this->db->insert('employee', $data);
			return ($result == true) ? true : false;
		}
	}

	public function check($email, $password)
	{
		if($email && $password) {
			$sql = "SELECT * FROM employee WHERE email = ?";
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();

			if($result == 1) {
				$data = $query->row_array();

				// check the password matches
				$current_password = $data['password'];
				$isCorrect = password_verify($password, $current_password);

				return ($isCorrect === true) ? true : false;
			}
			else {
				return false;
			}
		}
	}
}