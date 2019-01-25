<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    if(!function_exists('detail_print')) {
        function detail_print($data) {
            echo '<pre>';
            if(is_array($data)){
                var_dump($data);
            }else{
                print_r($data);
            }
            echo '</pre>';
        }
    }

    if(!function_exists('printr')) {
        function printr($data){
            echo '<pre>';
                print_r($data);
            echo '</pre>';
        }
    }

    if(!function_exists('is_logged_in')) {
        function is_logged_in() {
            $CI =& get_instance();
            return !empty($CI->session->userdata('employee_data')['user_info']) ? true : false;
        }
    }

    if(!function_exists('get_user_info')) {
        function get_employee_info($id) {
            $CI =& get_instance();

            $params = array(
                'select' => '*',
                'table' => 'employee',
                'where' => array(
                    'id' => $id,
                    'is_deleted' => 0
                )
            );
            return $CI->global_model->select($params)->row();
        }
    }

    if(!function_exists('image_upload')) {
        function upload($params) {
            $mkdir = mkdir('./assets/employee-uploads/images/a', 0777);
        }
    }

    /* Method to resize image */
    if(!function_exists('image_manipulation')) {
        function image_manipulation($uploadedImage) {
            $CI =& get_instance();

            $CI->load->library('image_lib');
            
            $config['image_library'] = 'gd2';
            $config['source_image'] = $uploadedImage['full_path'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 1300;
            // $config['height'] = 1300;
            $config['new_image'] = $uploadedImage['raw_name'] . '_size1' . $uploadedImage['file_ext'];

            $CI->image_lib->clear();
            $CI->image_lib->initialize($config);
            $CI->image_lib->resize();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $uploadedImage['full_path'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 300;
            $config['height'] = 300;
            $config['new_image'] = $uploadedImage['raw_name'] . '_size2' . $uploadedImage['file_ext'];

            $CI->image_lib->clear();
            $CI->image_lib->initialize($config);
            $CI->image_lib->resize();

            $config['image_library'] = 'gd2';
            $config['source_image'] = $uploadedImage['full_path'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 100;
            $config['height'] = 100;
            $config['new_image'] = $uploadedImage['raw_name'] . '_size3' . $uploadedImage['file_ext'];

            $CI->image_lib->clear();
            $CI->image_lib->initialize($config);
            $CI->image_lib->resize();

            return true;
        }
    }

    if(!function_exists('default_image_path')) {
        function default_image_path() {
            return base_url('assets/employee-uploads/images/dummy-images/');
        }
    }

    if(!function_exists('services_pagination')) {
        function services_pagination($params) {
            $CI = & get_instance();
            $CI->load->library('pagination');

            $config['base_url'] = $params['link'];
            $config['total_rows'] = $params['total_row'];
            $config['per_page'] = 5;
            $config['uri_segment'] = $params['segment'];

            $config['full_tag_open'] = '<center><ul class="pagination pagination-sm" id="'.$params['html_id'].'">';
            $config['full_tag_close'] = '</ul></center>';

            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '&laquo;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $CI->pagination->initialize($config);
        }
    }

    if(!function_exists('services_pagination')) {
        function services_pagination($params) {
            $CI = & get_instance();
            $CI->load->library('pagination');

            $config['base_url'] = $params['link'];
            $config['total_rows'] = $params['total_row'];
            $config['per_page'] = 5;
            $config['uri_segment'] = $params['segment'];

            $config['full_tag_open'] = '<center><ul class="pagination pagination-sm" id="'.$params['html_id'].'">';
            $config['full_tag_close'] = '</ul></center>';

            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '&laquo;';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $CI->pagination->initialize($config);
        }
    }
?>