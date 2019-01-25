<?php 

/*
* ******************* AUTH MODEL ****************
* This models contains all the frontend login, registration for the freelancer users.
*/

class Auth_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/*
	* Registers the new employee information into the employee table
	*/
	public function signup($data = array())
	{
		if($data)
		{
			$result = $this->db->insert('user', $data);
			return ($result == true) ? true : false;
		}
	}

	/*
	* Checks if the email and password exists in the database for the employee table
	*/
	public function check($email, $password)
	{
		if($email && $password) {
			$sql = "SELECT * FROM user WHERE email = ?";
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();

			if($result == 1) {
				$data = $query->row_array();

				// check the password matches
				$current_password = $data['password'];
				$isCorrect = password_verify($password, $current_password);

				return ($isCorrect === true) ? $data : false;
			}
			else {
				return false;
			}
		}
	}

	/*
	Fetch the users information from the employee table
	*/
	public function getUserData($userId)
	{
		if($userId) {
			$sql = "SELECT * FROM user WHERE id = ?";
			$query = $this->db->query($sql, array($userId));
			return $query->row_array();
		}
	}

	
}