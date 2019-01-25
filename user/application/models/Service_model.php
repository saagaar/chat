<?php 

/*
* ***************** SERVICE MODEL ***********************
* This model gets the all the service data that are created 
* from the client's company
* Table for this model are : `services`, `user_fav_services`. 
* is_deleted = 0 means not deleted, 1 means deleted
*/

class Service_Model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}


	public function getServerOfferData()
	{
		$sql = "SELECT * FROM services WHERE status = ? AND is_deleted = ?";
		//$sql = "SELECT * FROM services";
		//$query = $this->db->query($sql);
		$query = $this->db->query($sql, array(1, 0));

		// echo "<pre>";
		// print_r($query->result_array());
		// die;
		return $query->result_array();
	}

	public function getUserFavServiceData($user_id)
	{
		$sql = "SELECT * FROM user_fav_services WHERE user_id = ? AND is_deleted != ?";
		$query = $this->db->query($sql, array($user_id ,1));
		$result = $query->result_array();

		$service_data = array();
		foreach ($result as $k => $v) {
			$service_sql = "SELECT * FROM services WHERE id = ?";
			$service_query = $this->db->query($service_sql, array($v['service_id']));
			$service_result = $service_query->row_array();

			$service_data[] = $service_result;
		}

		return $service_data;
	}
}