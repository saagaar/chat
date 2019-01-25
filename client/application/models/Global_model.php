<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Global_model extends CI_Model {

		public function insert_batch($params) {
            $params = $this->security->xss_clean($params);

			return $this->db->insert_batch($params['table'], $params['data_to_insert']);
		}

		public function insert($params) {
            $params = $this->security->xss_clean($params);
            
			return $this->db->insert($params['table'], $params['data_to_insert']);
		}

		public function select($params) {
            $params = $this->security->xss_clean($params);

            if(isset($params['limit'])) {
                $this->db->limit($params['limit'], $params['limit_start']);
            }

            if(isset($params['order_by'])) {
                $this->db->order_by($params['order_by']);
            }

            if(isset($params['group_by'])) {
                $this->db->group_by($params['group_by']);
            }

            if((!empty($params['select']))) {
    	        $this->db->select($params['select']);
            }

	        $this->db->from($params['table']);

	        if(!empty($params['where'])) {
	            foreach($params['where'] as $key=>$value) {
	                $this->db->where($key, $value);
	            }
	        }

            if(!empty($params['like'])) {
                foreach($params['like'] as $key=>$value) {
                    $this->db->like($key, $value, $params['wildcard'] ? $params['wildcard'] : 'both'); //$params['wildcard'] is the position of wildcard operator in the keyword
                }
            }

	        return $this->db->get();
	    }

        public function update($params) {
            $params = $this->security->xss_clean($params);

            if(!empty($params['where'])) {
                // foreach($params['where'] as $key=>$value) {
                    $this->db->where($params['where']);
                // }
            }

            if(!empty($params['where_in'])) {
                $this->db->where_in($params['where_in'], $params['where_in_data']);
            }
            return $this->db->update($params['table'], $params['data_to_insert']);
        }

	    public function select_with_join($params) {
            $params = $this->security->xss_clean($params);

            if(isset($params['limit'])) {
                $this->db->limit($params['limit'], $params['limit_start']);
            }

            if(isset($params['order_by'])) {
                $this->db->order_by($params['order_by']);
            }

            if(isset($params['group_by'])) {
                $this->db->group_by($params['group_by']);
            }

            if(isset($params['select'])) {
                $this->db->select($params['select']);
            }

            $this->db->from($params['table']);

            if(!empty($params['where'])) {
                // foreach($params['where'] as $key=>$value) {
                    $this->db->where($params['where']);
                // }
            }

            if(!empty($params['join'])) {
                foreach($params['join'] as $table=>$join) {
                    $join = explode('&', $join);
                    $this->db->join($table, $join[0], isset($join[1]) ? $join[1] : '');
                }
            }
            return $this->db->get();
    	}

        public function delete($params) {
            $params = $this->security->xss_clean($params);
            
            if(!empty($params['where'])) {
                // foreach($params['where'] as $k => $v) {
                    $this->db->where($params['where']);
                // }
            }
            
            return $this->db->delete($params['table']);
        }

        public function soft_delete($params) {
            $params = $this->security->xss_clean($params);

            $this->db->set('is_deleted', 1);

            if(!empty($params['where'])) {
                $this->db->where($params['where']);
            }

            return $this->db->update($params['table']);
        }
	}
?>