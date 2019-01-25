<?php 

class Usercompany_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getUserFavEmployeeCompanyData($user_id)
	{
		// if($user_id) {
		// 	$sql = "SELECT * FROM user_fav_company WHERE user_id = ? AND is_deleted != ?";
		// 	$query = $this->db->query($sql, array($user_id, 1));
		// 	$result = $query->result_array();

		// 	$company_data = array();

		// 	$x = 0;
		// 	$company_data = $result;
		// 	foreach ($result as $key => $value) {
				
		// 		$companysql = "SELECT * FROM company WHERE id = ? AND is_deleted != ?";
		// 		$companyquery = $this->db->query($companysql, array($value['company_id'], 1));
		// 		$companyresult = $companyquery->row_array();

		// 		$company_data[$x]['company_details'] = $companyresult;
		// 		$x++;
		// 	}

		// 	return $company_data;
		// }
	}
}