<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Services_model extends CI_Model {

		public function select_services($params) {
            $params = $this->security->xss_clean($params);

	        $this->db->select('id, title, sale_amount, rate, start_date, end_date, status, (sale_count*rate) as income');

            if(isset($params['order_by'])) {
                $this->db->order_by($params['order_by'], $params['order']);
            }

	        $this->db->from('services');
            $this->db->where('company_id', $this->session->userdata()['employee_data']['user_info']->company_id);
            $this->db->where('is_deleted', 0);
                    
            $data['count'] = $this->db->get()->num_rows(); //counts the total number of rows from the sql for pagination
            $query = $this->db->last_query();
            $data['result'] = $this->db->query($query . ' LIMIT ' . $params['offset'] . ', 5')->result(); //returns on the basis of limit offset
            return $data;
	    }

        public function select_sales($params) {
            $params = $this->security->xss_clean($params);

            $this->db->select('s.id as sale_id, s.sale_datetime, s.sale_complete_datetime, s.is_completed, s.feedback, s.feedback_datetime, s.payment_method, sv.start_date, sv.end_date, sv.rate, sv.status, sv.id as service_id');
            $this->db->from('sales s');
            $this->db->where('s.is_deleted', 0);
            $this->db->where('sv.is_deleted', 0);
            $this->db->join('services sv', 's.service_id = sv.id');

            $data['count'] = $this->db->get()->num_rows(); //counts the total number of rows from the sql for pagination
            $query = $this->db->last_query();
            $data['result'] = $this->db->query($query . ' LIMIT ' . $params['offset'] . ', 5')->result(); //returns on the basis of limit offset
            return $data;
        }
	}
?>