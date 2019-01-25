<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_dashboard extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->session->set_userdata('url', $this->uri->segment(1));
	}

	public function index()	{
		$params = [];
		$data = [];

		/* Appending data to the session variable */
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'home';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		// printr($this->session->userdata());die;

		$params = array(
			// 'select' => 'e.*, ec.*, c.*, e.id as employee_id, c.id as company_id, c.name as company_name, ec.id as employee_company_id, e.country_id as employee_country_id, cn.countryName, e.address as address, e.city as city',
			'select' => 'e.*, c.id as company_id, c.language_id as company_language_id, c.name as company_name, c.name as company_name, c.about_us as company_about_us, c.country_id as company_country_id, c.active as company_active, c.registration_date as company_registration_date, c.delete_date as company_delete_date, c.work_hour as company_work_hour, c.job_complete as company_job_complete, c.earned as company_earned, c.photo as company_photo, c.city as company_city, c.zipcode as company_zipcode, c.address as company_address, c.email as company_email, c.email_confirmed as company_email_confirmed, c.fax as company_fax, c.phone as company_phone, c.is_deleted as company_is_deleted, c.last_login as company_last_login, ec.role as role, ec.is_deleted as employee_company_is_deleted, cn.countryCode as country_code, cn.countryName as country_name, cn.sort, cn.account_id, cn.is_deleted as country_is_deleted',
			'table' => 'employee e',
			'where' => array(
				'e.id' => $this->session->userdata('employee_data')['user_info']->id,
				'e.is_deleted' => 0
			),
			'join' => array(
				'employee_company ec' => 'e.id = ec.employee_id AND ec.is_deleted=0&left', //the array value is exploded in reference to '&'
				'company c' => 'ec.company_id = c.id AND c.is_deleted=0&left', //put join type after the '&'
				'country cn' => 'e.country_id = cn.id AND cn.is_deleted=0&left'
			)
		);

		$data['employee_detail'] = $this->global_model->select_with_join($params)->row();
		$data['employee_detail']->full_name = $data['employee_detail']->first_name.' '.$data['employee_detail']->last_name;
		$data['employee_detail']->dob = date('Y-m-d', $data['employee_detail']->dob);

		$params = array(
			'select' => 'e.*, ec.id as employee_company_id, ec.role, ec.is_deleted as employee_company_is_deleted',
			'table' => 'employee_company ec',
			'where' => array(
				'ec.company_id' => $this->session->userdata('employee_data')['user_info']->company_id,
				'ec.role' => 'admin',
				'ec.is_deleted' => 0
			),
			'join' => array(
				'employee e' => 'ec.employee_id = e.id AND e.is_deleted=0&'
			)
		);
		$data['owner_info'] = $this->global_model->select_with_join($params)->row();

		$params = array(
			'select' => '*',
			'table' => 'services',
			'where' => array(
				'company_id' => $this->session->userdata()['employee_data']['user_info']->company_id,
				'is_deleted' => 0
			)
		);
		$data['our_services'] = $this->global_model->select($params)->result();

		foreach($data['our_services'] as $service) {
			$params = array(
				'select' => '*',
				'table' => 'service_images',
				'where' => array(
					'service_id' => $service->id,
					'is_deleted' => 0
				)
			);
			$service->service_images = $this->global_model->select($params)->result(); //appending images to its relative service array
		}

		$params = array(
			'select' => 'e.*, ec.role',
			'table' => 'employee_company ec',
			'where' => array(
				'ec.company_id' => $this->session->userdata('employee_data')['user_info']->company_id,
				'ec.employee_id != ' => $this->session->userdata('employee_data')['user_info']->id,
				'ec.is_deleted' => 0
			),
			'join' => array(
				'employee e' => 'ec.employee_id = e.id&left'
			)
		);
		$data['our_team'] = $this->global_model->select_with_join($params)->result();
		// printr($data);die;

		$this->load->view('client/dashboard/dashboard', $data);
	}

	function get_employee_detail() {
		$employee_id = $this->input->post('employee_id');

		$params = array(
			'select' => 'e.*, ec.role',
			'table' => 'employee e',
			'where' => array(
				'e.id' => $employee_id,
				'e.is_deleted' => 0
			),
			'join' => array(
				'employee_company ec' => 'e.id = ec.employee_id&'
			)
		);
		$employee_data = $this->global_model->select_with_join($params)->row();
		$employee_data->profile_picture = $employee_data->profile_picture!='' ? $employee_data->profile_picture : default_image_path().'/no_image_size4.jpg';
		$m_checked = $employee_data->gender==1 ? ' checked' : '';
		$f_checked = $employee_data->gender==0 ? ' checked' : '';
		$employee_data->dob = date('Y-m-d', $employee_data->dob);
		$action = 'Edit';
		// printr($employee_data);die;

		$popup_data = '<form method="POST" id="team_member_form">
	        <div class="modal-dialog" style="width: 820px;">
	            <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;padding:7px">
	                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
	                    <h4 class="modal-title custom_align text-center2" id="Heading"></h4>
	                </div>
	                <div class="col-lg-12">
	                    <div class="col-lg-4"> <img src="'.$employee_data->profile_picture.'" alt="" class="projectImgfordocumnet"> </div>
	                    <div class="col-lg-8" style="border-left:1px solid #d5d2d2;margin-top: 14px;padding:0px;">
	                        <div class="col-lg-12">
	                            <div class="col-lg-2" style="padding: 0;">
	                                <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Gender :</h3>
	                            </div>
	                            <div class="col-lg-5 col-md-6 col-sm-6">
	                                <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="gender" id="male" value="1" type="radio" '.$m_checked.'> </span> <span class="form-control" style="margin-bottom:0px;">Male</span> </div>
	                            </div>
	                            <div class="col-lg-1"></div>
	                            <div class="col-lg-5 col-md-6 col-sm-6">
	                                <div class="input-group"> <span class="input-group-addon"> <input aria-label="..." required="" name="gender" id="female" value="0" type="radio" '.$f_checked.'> </span> <span class="form-control" style="margin-bottom:0px;">Female</span> </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Position :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="position" placeholder="Position" name="position" required="" type="text" value="'.$employee_data->role.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">First Name :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="first_name" placeholder="First Name" name="first_name" required="" type="text" value="'.$employee_data->first_name.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Last Name :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="last_name" placeholder="Last Name" name="last_name" required="" type="text" value="'.$employee_data->last_name.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">DOB :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="dob" placeholder="DOB" name="dob" required="" type="date" value="'.$employee_data->dob.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">E-Mail :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="email" placeholder="Email" name="email" required="" type="email" value="'.$employee_data->email.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Phone :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="phone" placeholder="Phone" name="Nom2" required="" type="number" value="'.$employee_data->phone.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">Street No :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="street_no" placeholder="Street No" name="street_no" required="" type="text" value="'.$employee_data->street_no.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-6" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 22.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">City :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 77.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="city" placeholder="City" name="city" required="" type="text" value="'.$employee_data->city.'"></div>
	                            </div>
	                        </div>
	                        <div class="col-lg-6" style="margin-top:16px;">
	                            <div class="form-group">
	                                <div class="col-lg-2" style="padding:0px;width: 43.666667%;">
	                                    <h3 class="" style="font-size:18px;margin-top:8px;margin-bottom:0px;">PostCode :</h3>
	                                </div>
	                                <div class="col-lg-10" style="width: 56.333333%;"> <input class="form-control" style="margin-bottom:0px;" id="post_code" placeholder="Post Code" name="post_code" required="" type="text" value="'.$employee_data->post_code.'"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xs-12" style="margin-top:15px;">
	                    <hr class="hfkaniei"> </div>
	                <div class="col-lg-12" style="margin-top:5px;margin-bottom:8px;">
	                    <div class="col-lg-3 col-lg-offset-5 "><button type="submit" id="team_member_submit" class="btn vd_btn" data-dismiss="modal" style="text-align: left; width: 100%; padding: 4px; border-radius: 24px; color: black; background: white; border: 1px solid #cbcbcb;"> <span class="append-icon" style="text-align:left;margin-right:42"><img src="'.base_url('assets/').'img/true.png" style="width:23px;margin-right: 31px;">'.$action.'</span></button></div>
	                </div>
	            </div>
	        </div>
        </form>';
		echo json_encode($popup_data);
		die;
	}

	/**/
	public function save_company_info() {
		$params = array(
			'table' => 'company',
			'data_to_insert' => array(
				'about_us' => $this->input->post('company_info')
			)
		);
		$this->global_model->update($params);
		echo json_encode('success');
	}

	public function ajax_image_upload() {
		$path = $this->input->post('path').$this->session->userdata('employee_data')['user_info']->id.'/';
		$mkdir = mkdir($path, 0777);

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		$config['max_size'] = '1000';
        $config['encrypt_name'] = TRUE;
 
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists($path . $_FILES['file']['name'])) {
                    echo 'File already exists : ' . $path . $_FILES['file']['name'];
                } else {
                    $this->load->library('upload', $config);

                    /* Delete all image inside the directory before uploading a new one */
                    foreach (glob($path."/*.*") as $filename) {
					    if (is_file($filename)) {
					        unlink($filename);
					    }
					}

                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    } else {
                    	$params = array(
			            	'table' => 'employee',
			            	'where' => array(
			            		'id' => $this->session->userdata('employee_data')['user_info']->id
			            	),
			            	'data_to_insert' => array(
			            		$this->input->post('table_field') => $this->upload->data('file_name')
			            	)
			            );
			            $this->global_model->update($params);

			            image_manipulation($this->upload->data());

                        echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
                    }
                }
            }			

			// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
			// $this->upload->initialize($config);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */