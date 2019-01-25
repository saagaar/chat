<?php 

class Searchjob_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function createDocument($insert_data)
	{
		if($insert_data) {
			$document_data = $this->db->insert('user_document', $insert_data);
			return ($document_data == true) ? true : false;
		}	
	}
}