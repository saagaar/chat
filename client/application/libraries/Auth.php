<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'phpass-0.3/PasswordHash.php');

define('PHPASS_HASH_STRENGTH', 8);
define('PHPASS_HASH_PORTABLE', false);

/**
 * Auth Class
 *
 * Makes authentication simple and secure.
 *
 * Simplelogin expects the following database setup. If you are not using 
 * this setup you may need to do some tweaking.
 * 
 * @package   Auth
 * @version   2.1.1
 * @author    Stéphane Bourzeix, Pixelmio <stephane[at]bourzeix.com>
 * @copyright Copyright (c) 2012-2013, Stéphane Bourzeix
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt
 * @link      https://github.com/DaBourz/SimpleLoginSecure
 */
class Auth
{
	protected $CI; // CodeIgniter object
	protected $user_table = 'employee'; // Table name
	
	/**
	* Constructor
	* Get the current CI object
	*/
	public function __construct()
    {
        // Assign the CodeIgniter super-object
		$this->CI =& get_instance();
	}

	function hash_password($password) {
		//Hash password using phpass
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		return $hasher->HashPassword($password);
	}

	/**
	 * Login and sets session variables
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	bool
	 */
	function login($user_email = '', $user_pass = '') 
	{

		if($user_email == '' OR $user_pass == '')
			return false;


		//Check if already logged in
		if($this->CI->session->userdata('user_email') == $user_email)
			return true;
		
		
		//Check against user table
		$this->CI->db->where('email', $user_email);
		$this->CI->db->or_where('login', $user_email);
		$query = $this->CI->db->get_where($this->user_table);

		
		if ($query->num_rows() > 0) 
		{
			$user_data = $query->row_array(); 

			$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);

			if(!$hasher->CheckPassword($user_pass, $user_data['user_pass']))
				return false;

			//Create a fresh, brand new session
			if (CI_VERSION >= '3.0') {
				$this->CI->session->sess_regenerate(TRUE);
			} else {
				//Destroy old session
				$this->CI->session->sess_destroy();
				$this->CI->session->sess_create();
			}

			$this->CI->db->simple_query('UPDATE ' . $this->user_table  . ' SET last_login = "' . time() . '" WHERE id = ' . $user_data['id']);

			//Set session data
			unset($user_data['user_pass']);
			$user_data['user'] = $user_data['user_email']; // for compatibility with Simplelogin
			$user_data['logged_in'] = true;
			$this->CI->session->set_userdata('employee_data', array('user_info' => $user_data));
			
			return true;
		} 
		else 
		{
			return false;
		}	

	}

	/**
	 * Logout user
	 *
	 * @access	public
	 * @return	void
	 */
	function logout() {	
		$this->session->unset_userdata('employee_data');
		$this->session->sess_destroy();
		redirect('/');
	}	
	
	/**
	* Edit a user password
	* @author    Stéphane Bourzeix, Pixelmio <stephane[at]bourzeix.com>
	* @author    Diego Castro <castroc.diego[at]gmail.com>
	*
	* @access  public
	* @param  string
	* @param  string
	* @param  string
	* @return  bool
	*/
	function edit_password($user_email = '', $old_pass = '', $new_pass = '')
	{
		
		// Check if the password is the same as the old one
		$this->CI->db->select('user_pass');
		$query = $this->CI->db->get_where($this->user_table, array('user_email' => $user_email));
		$user_data = $query->row_array();

		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);	
		if (!$hasher->CheckPassword($old_pass, $user_data['user_pass'])){ //old_pass is the same
			return FALSE;
		}
		
		// Hash new_pass using phpass
		$user_pass_hashed = $hasher->HashPassword($new_pass);
		// Insert new password into the database
		$data = array(
			'user_pass' => $user_pass_hashed,
			'user_modified' => date('c')
		);
		
		$this->CI->db->set($data);
		$this->CI->db->where('user_email', $user_email);
		if(!$this->CI->db->update($this->user_table, $data)){ // There was a problem!
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
}
?>
