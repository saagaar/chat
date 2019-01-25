<?php 

/*
* JOB MODEL tables are `job_title`, `company`.
* This model gets the job created by the client's company 
*/

class Job_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/*
	* gets the job offer data that is created from the client company
	* this function returns the job offer data and the compnay information
	*/
	public function getJobOffer()
	{
		$sql = "SELECT * FROM job_title WHERE is_delete != ?";
		$query = $this->db->query($sql, array(1));
		$result = $query->result_array();

		$x = 0;

		$finaldata = array();

		foreach ($result as $v) {

			$finaldata[] = $v;

			// get the compnay information
			$company_sql = "SELECT * FROM company WHERE id = ?";
			$company_query = $this->db->query($company_sql, array($v['company_id']));
			$company_result = $company_query->row_array();

			$finaldata[$x]['company_detail'] = $company_result;
			$x++;
		}

		return $finaldata;
	}



}