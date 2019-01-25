<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_services extends MY_Controller {

	public function __construct() {
		parent:: __construct();

		$this->session->set_userdata('url', $this->uri->segment(1));
	}

	public function index()	{
		// echo memory_get_usage();die;
		$params = [];
		$data = [];
		$service_images = [];

		/* Appending data to the session variable */
		$data['employee_data'] = $this->session->userdata('employee_data');
		$data['employee_data']['side_nav'] = 'sale services';
		$this->session->set_userdata('employee_data', $data['employee_data']);
		unset($data['employee_data']);

		$params = array(
			'select' => '*',
			'table' => 'services',
			'where' => array(
				'company_id' => $this->session->userdata()['employee_data']['user_info']->company_id,
				'is_deleted' => 0
			)
		);
		$data['all_services'] = $this->global_model->select($params)->result();

		foreach($data['all_services'] as $service) {
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

		$data['ajax_url'] = base_url('sale_services/navigate_sale_services/');
		$data['ajax_url2'] = base_url('sale_services/navigate_manage_services/');
		$data['ajax_url3'] = base_url('sale_services/navigate_sale_services_history/');

		// printr($data);die;

		$this->load->view('client/sale-services/sale_services', $data);
	}

	public function navigate_sale_services($offset=0) {
		$this->load->model('services_model');

		$params = array(
			'offset' => $offset,
			'order_by' => 'sale_count',
			'order' => 'DESC'
		);
		$data = $this->services_model->select_services($params);
		$data['services'] = $data['result'];

		$params = array(
			'total_row' => $data['count'],
			'link' => base_url('sale_services/navigate_sale_services/'),
			'segment' => 3,
			'html_id' => 'list_services_pagination'
		);
		services_pagination($params);
        $ajax_page_data = $this->load->view('client/sale-services/sale_services_ajax', $data, TRUE);

        echo json_encode($ajax_page_data);
        die;
	}

	public function navigate_manage_services($offset=0) {
		$this->load->model('services_model');
		$params = array('offset'=>$offset);
		$data = $this->services_model->select_services($params);
		$data['services'] = $data['result'];

		$params = array(
			'total_row' => $data['count'],
			'link' => base_url('sale_services/navigate_manage_services/'),
			'segment' => 3,
			'html_id' => 'manage_services_pagination'
		);
		services_pagination($params);
        $ajax_page_data = $this->load->view('client/sale-services/manage_service_ajax', $data, TRUE);

        echo json_encode($ajax_page_data);
        die;
	}

	public function navigate_sale_services_history($offset=0) {
		$this->load->model('services_model');
		$params = array('offset'=>$offset);
		$data = $this->services_model->select_sales($params);
		$data['sales'] = $data['result']; //printr($data);die;

		$params = array(
			'total_row' => $data['count'],
			'link' => base_url('sale_services/navigate_sale_services_history/'),
			'segment' => 3,
			'html_id' => 'sale_services_pagination'
		);
		services_pagination($params);
        $ajax_page_data = $this->load->view('client/sale-services/sale_history_ajax', $data, TRUE);

        echo json_encode($ajax_page_data);
        die;
	}

	public function service_popup() {
		$days = unserialize(DAYS);

		// $popup_data = $this->load->view('client/sale-services/add_service_form', true);

		$popup_data = 
			'<form method="POST" id="service_form" action="'.base_url().'sale_services/save_service" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-dialog" style="width:100%">
                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto">
                        <div class="modal-header" style="padding:8px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                            <h4 class="text-center2" style="font-family:OpenSans-Regular;padding:8px">Add New Service</h4>
                        </div>
                        <div class="single" id="a" style="display: block;padding:8px">
                            <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;">
                                <input name="service_title" id="service_title" class="form-control" placeholder="Service Title" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text">
                            </div>

                            <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px">
                                <textarea class="reviewcontent" id="editortest2" name="description">
                                    Enter description here        
                                </textarea>
       
	                            <script>
	                                // Replace the <textarea id="editor1"> with a CKEditor
	                                // instance, using default configuration.
	                                CKEDITOR.replace("editortest2");
	                            </script>
	                        </div>
	                    </div>
	                    <div class="single" id="b" style="padding:8px">
	                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Upload Images</h3>
	                        <div class="image-addon2 "></div>
	                        <div class="add-more2 hide-new ">
	                            <label for="upload_img" style="width:100%;height:100%">
	                                <img src="'.base_url().'assets/img/image.svg">
	                            </label>
	                            <input style="visibility:hidden;" type="file" id="upload_img" name="service_image" class="add_img_button2"> 
	                        </div>
	                    </div>

                                
                        <div class="single" id="c" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Price and Duration</h3>
                            <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none;">
                                <div id="datetimepicker1" class="input-group date">
                                	<input name="service_start_date" id="service_start_date" style="margin:0" placeholder="Start Date" class="form-control" type="text">
                                	<span class="add-on input-group-addon" required> <span class="fa fa-calendar"></span> </span>
                                </div>
                            </div>
                        	<div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none; float:right">
	                            <script>
	                                $(function() {
	                                    $("#datetimepicker1").datetimepicker({
	                                        language: "pt-BR"
	                                    });
	                                });
	                            </script>
                            	<div id="datetimepicker2" class="input-group date">
                            		<input name="service_end_date" id="service_end_date" placeholder="End Date" style="margin:0" class="form-control" type="text" required>
                            		<span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                            	</div>
	                            <script>
	                                $(function() {
	                                    $("#datetimepicker2").datetimepicker({
	                                        language: "pt-BR"
	                                    });
	                                });
	                            </script>
	                        </div>
                            <div class="col-lg-6" style=" margin-bottom: 8px;">
                                <select type="text" name="appointment" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1">YES</option>
                                    <option value="0">NO</option>
                                    <option selected="" disabled="">Appointment</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style=" margin-bottom: 8px;">
                                <select type="text" name="sale_amount" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required> 
                                    <option value="100">0-100</option>
                                    <option value="500">101-500</option>
                                    <option value="1000">501-1000</option>
                                    <option value="999999999">Unlimited</option>
                                    <option selected="" disabled="">Sale Amount</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style="margin-bottom: 8px;">
                                <select type="text" name="work_days[]" class="form-control" aria-describedby="basic-addon1" style=";margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1">'.$days[1].'</option>
                                    <option value="2">'.$days[2].'</option>
                                    <option value="3">'.$days[3].'</option>
                                    <option value="4">'.$days[4].'</option>
                                    <option value="5">'.$days[5].'</option>
                                    <option value="6">'.$days[6].'</option>
                                    <option value="7">'.$days[7].'</option>
                                    <option selected="" disabled="">Work Days</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style= "margin-bottom: 8px;">
                                <select type="text" name="work_time[]" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="8-12">08:00 - 12:00</option>
                                    <option value="13-20">13:00 - 20:00</option>
                                    <option selected="" disabled="">Work Times</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                <select type="text" name="validity" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="4">4 Months</option>
                                    <option value="5">5 Months</option>
                                    <option value="6">6 Months</option>
                                    <option selected="" disabled="">validity after Purchase</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                <input name="service_price" class="form-control" placeholder="Price" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;padding-right: 16px; text-align-last: center;" type="number" required>
                            </div>
                        </div>
                        <div class="single" id="d" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                            <div class="notificationredsaleservice">
                                <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                            </div>
                        </div>
                        <div class="single" id="e" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Payments</h3>
                            <div class="col-lg-12 selectpayement">
                                <label><input type="checkbox" name="payment_method[]" value="1"> PayPal</label>
                                <label><input type="checkbox" name="payment_method[]" value="2"> GiroPay</label>
                                <label><input type="checkbox" name="payment_method[]" value="3"> Sofort</label>
                            </div>
                            <div class="col-lg-12">
                                <div class="notificationredsaleservice" style="margin-top:20px;">
                                    <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                    <h4 class="text-center2" style="color:white">We charge for each Sale 20% Net </h4>
                                </div>
                            </div>
                        </div>
                        <hr class="addsericenew">
                        <div class="col-lg-12" style="background-color:#808080;padding:0">
                            <div type="button" class="back" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Previous</div>
                            <div type="button" class="closeds" data-dismiss="modal" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Close</div>
                            <ul class="div-link">
                                <li class="active"><a href="#a">A</a></li>
                                <li><a href="#b">B</a></li>
                                <li><a href="#c">C</a></li>
                                <li><a href="#d">C</a></li>
                                <li><a href="#e">C</a></li>
                            </ul>
                            <div type="button" class="next" style="display: inline-block;background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:19px">Next</div>

                            <button type="submit" id="add_service_submit" class="savebutton" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px;border:none;">Save</button>
                        </div>
                    </div>
                </div>
            </form>';

        echo json_encode($popup_data);die;
	}

	public function edit_service_popup() {
		$days = unserialize(DAYS);

		$service_id = $this->input->post('service_id');

		$params = array(
			'select' => '*',
			'table' => 'services',
			'where' => array(
				'id' => $service_id,
				'is_deleted' => 0,
			)
		);
		$service_data = $this->global_model->select_with_join($params)->row();

		$params = array(
			'select' => '*',
			'table' => 'service_images',
			'where' => array(
				'service_id' => $service_id,
				'is_deleted' => 0
			)
		);
		$service_data->service_images = $this->global_model->select($params)->result(); //appending images to its relative service array

		$appointment_yes = $service_data->appointment==1 ? ' selected ' : '';
		$appointment_no = $service_data->appointment==0 ? ' selected ' : '';

		$sale_amount_100 = $service_data->sale_amount==100 ? ' selected ' : '';
		$sale_amount_500 = $service_data->sale_amount==500 ? ' selected ' : '';
		$sale_amount_1000 = $service_data->sale_amount==1000 ? ' selected ' : '';
		$sale_amount_unlimited = $service_data->sale_amount==999999999 ? ' selected ' : '';

		$work_days = explode(',', $service_data->work_days);
		$work_days_1 = $service_data->work_days==1 ? ' selected ' : '';
		$work_days_2 = $service_data->work_days==2 ? ' selected ' : '';
		$work_days_3 = $service_data->work_days==3 ? ' selected ' : '';
		$work_days_4 = $service_data->work_days==4 ? ' selected ' : '';
		$work_days_5 = $service_data->work_days==5 ? ' selected ' : '';
		$work_days_6 = $service_data->work_days==6 ? ' selected ' : '';
		$work_days_7 = $service_data->work_days==7 ? ' selected ' : '';

		$work_times = explode(',', $service_data->work_time);
		$work_time_8_12 = $service_data->work_time=='8-12' ? ' selected ' : '';
		$work_time_13_20 =  $service_data->work_time=='13-20' ? ' selected ' : '';

		$validity_after_purchase_1 = $service_data->validity==1 ? ' selected ' : '';
		$validity_after_purchase_2 = $service_data->validity==2 ? ' selected ' : '';
		$validity_after_purchase_3 = $service_data->validity==3 ? ' selected ' : '';
		$validity_after_purchase_4 = $service_data->validity==4 ? ' selected ' : '';
		$validity_after_purchase_5 = $service_data->validity==5 ? ' selected ' : '';
		$validity_after_purchase_6 = $service_data->validity==6 ? ' selected ' : '';

		$payment_methods = explode(',', $service_data->payment_methods);
		$payment_method_paypal = in_array(1, $payment_methods) ? ' checked ' : '';
		$payment_method_giropay = in_array(2, $payment_methods) ? ' checked ' : '';
		$payment_method_sofort = in_array(3, $payment_methods) ? ' checked ' : '';

		$images = '';

		foreach($service_data->service_images as $val) {
			$images .= '<div class="add-more2"><div class="multi-img"><div class="fileupload fileupload-exists" data-provides="fileupload"><input type="hidden" name="prev_images[]" value="'.$val->name.'"><input type="hidden" value="" name=""><div class="fileupload-preview thumbnail"><img src="'.base_url('assets/employee-uploads/images/service-pictures/').$service_data->id.'/'.$val->name.'"></div><br><span class="btn btn-default btn-file svgimg"><span class="fileupload-new"><img src="http://localhost/guru/assets/img/image01.svg"></span><input type="file" name="service_images[]"></span></div></div><span class="remove_field fa fa-times"></span></div>';
		}

		$popup_data = 
			'<form method="POST" id="service_form" action="'.base_url().'sale_services/save_service" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="modal-dialog" style="width:100%">
                    <div class="modal-content" tabindex="5" style="overflow: hidden; outline: none;width:520px;padding:0px;margin:auto">
                        <div class="modal-header" style="padding:8px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                            <h4 class="text-center2" style="font-family:OpenSans-Regular;padding:8px">Add New Service</h4>
                        </div>
                        <div class="single" id="a" style="display: block;padding:8px">
                            <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;">
                            	<input name="service_id" type="hidden" value="'.$service_data->id.'">
                                <input name="service_title" id="service_title" class="form-control" placeholder="Service Title" value="'.$service_data->title.'" aria-describedby="basic-addon1" style="border-radius:0px;margin-bottom:0px;width:100%;border:none;font-family:OpenSans-Regular;" type="text">
                            </div>

                            <div class="col-lg-12" style="border:1px solid #aab7a2;padding:0px;margin-top:10px;margin-bottom:15px">
                                <textarea class="reviewcontent" id="editortest2" name="description">
                                    '.$service_data->description.'
                                </textarea>
       
	                            <script>
	                                // Replace the <textarea id="editor1"> with a CKEditor
	                                // instance, using default configuration.
	                                CKEDITOR.replace("editortest2");
	                            </script>
	                        </div>
	                    </div>
	                    <div class="single" id="b" style="padding:8px">
	                        <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Upload Images</h3>
	                        <div class="image-addon2 ">'.$images.'</div>
	                        <div class="add-more2 hide-new ">
	                            <label for="upload_img" style="width:100%;height:100%">
	                                <img src="'.base_url().'assets/img/image.svg">
	                            </label>
	                            <input style="visibility:hidden;" type="file" id="upload_img" name="service_image" class="add_img_button2"> 
	                        </div>
	                    </div>

                                
                        <div class="single" id="c" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Price and Duration</h3>
                            <div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none;">
                                <div id="datetimepicker1" class="input-group date">
                                	<input name="service_start_date" id="service_start_date" style="margin:0" placeholder="Start Date" value="'.date('Y-m-d', $service_data->start_date).'" class="form-control" type="text">
                                	<span class="add-on input-group-addon" required> <span class="fa fa-calendar"></span> </span>
                                </div>
                            </div>
                        	<div class="col-lg-6" style="padding-top:10px;padding-bottom:10px;border-right:none; float:right">
	                            <script>
	                                $(function() {
	                                    $("#datetimepicker1").datetimepicker({
	                                        language: "pt-BR"
	                                    });
	                                });
	                            </script>
                            	<div id="datetimepicker2" class="input-group date">
                            		<input name="service_end_date" id="service_end_date" placeholder="End Date" value="'.date('Y-m-d', $service_data->end_date).'" style="margin:0" class="form-control" type="text" required>
                            		<span class="add-on input-group-addon"> <span class="fa fa-calendar"></span> </span>
                            	</div>
	                            <script>
	                                $(function() {
	                                    $("#datetimepicker2").datetimepicker({
	                                        language: "pt-BR"
	                                    });
	                                });
	                            </script>
	                        </div>
                            <div class="col-lg-6" style=" margin-bottom: 8px;">
                                <select type="text" name="appointment" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1" '.$appointment_yes.'>YES</option>
                                    <option value="0" '.$appointment_no.'>NO</option>
                                    <option disabled="">Appointment</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style=" margin-bottom: 8px;">
                                <select type="text" name="sale_amount" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required> 
                                    <option value="100" '.$sale_amount_100.'>0-100</option>
                                    <option value="500" '.$sale_amount_500.'>101-500</option>
                                    <option value="1000" '.$sale_amount_1000.'>501-1000</option>
                                    <option value="999999999" '.$sale_amount_unlimited.'>Unlimited</option>
                                    <option disabled="">Sale Amount</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style="margin-bottom: 8px;">
                                <select type="text" name="work_days[]" class="form-control" aria-describedby="basic-addon1" style=";margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1" '.$work_days_1.'>'.$days[1].'</option>
                                    <option value="2" '.$work_days_2.'>'.$days[2].'</option>
                                    <option value="3" '.$work_days_3.'>'.$days[3].'</option>
                                    <option value="4" '.$work_days_4.'>'.$days[4].'</option>
                                    <option value="5" '.$work_days_5.'>'.$days[5].'</option>
                                    <option value="6" '.$work_days_6.'>'.$days[6].'</option>
                                    <option value="7" '.$work_days_7.'>'.$days[7].'</option>
                                    <option disabled="">Work Days</option>
                                </select>
                            </div>
                            <div class="col-lg-6" style= "margin-bottom: 8px;">
                                <select type="text" name="work_time[]" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="8-12" '.$work_time_8_12.'>08:00 - 12:00</option>
                                    <option value="13-20" '.$work_time_13_20.'>13:00 - 20:00</option>
                                    <option disabled="">Work Times</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                <select type="text" name="validity" class="form-control" aria-describedby="basic-addon1" style="margin-bottom:0px;width:100%;font-family:OpenSans-Regular;padding-right: 16px; text-align-last: center;" required>
                                    <option value="1" '.$validity_after_purchase_1.'>1 Month</option>
                                    <option value="2" '.$validity_after_purchase_2.'>2 Months</option>
                                    <option value="3" '.$validity_after_purchase_3.'>3 Months</option>
                                    <option value="4" '.$validity_after_purchase_4.'>4 Months</option>
                                    <option value="5" '.$validity_after_purchase_5.'>5 Months</option>
                                    <option value="6" '.$validity_after_purchase_6.'>6 Months</option>
                                    <option disabled="">validity after Purchase</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-lg-offset-3" style=" margin-bottom: 8px;">
                                <input name="service_price" class="form-control" placeholder="Price" aria-describedby="basic-addon1" value="'.$service_data->rate.'" style="margin-bottom:0px;width:100%;padding-right: 16px; text-align-last: center;" type="number" required>
                            </div>
                        </div>
                        <div class="single" id="d" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Notifications</h3>
                            <div class="notificationredsaleservice">
                                <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                <h4 class="text-center2" style="color:white">Your Offer will be viewd form Admin</h4>
                            </div>
                        </div>
                        <div class="single" id="e" style="padding:8px">
                            <h3 class="text-center2" style="font-family:OpenSans-Regular;color: #9ac034;">Payments</h3>
                            <div class="col-lg-12 selectpayement">
                                <label><input type="checkbox" name="payment_method[]" value="1" '.$payment_method_paypal.'> PayPal</label>
                                <label><input type="checkbox" name="payment_method[]" value="2" '.$payment_method_giropay.'> GiroPay</label>
                                <label><input type="checkbox" name="payment_method[]" value="3" '.$payment_method_sofort.'> Sofort</label>
                            </div>
                            <div class="col-lg-12">
                                <div class="notificationredsaleservice" style="margin-top:20px;">
                                    <h4 class="text-center2" style="color:white">!! Please Note !!</h4>
                                    <h4 class="text-center2" style="color:white">We charge for each Sale 20% Net </h4>
                                </div>
                            </div>
                        </div>
                        <hr class="addsericenew">
                        <div class="col-lg-12" style="background-color:#808080;padding:0">
                            <div type="button" class="back" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Previous</div>
                            <div type="button" class="closeds" data-dismiss="modal" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px">Close</div>
                            <ul class="div-link">
                                <li class="active"><a href="#a">A</a></li>
                                <li><a href="#b">B</a></li>
                                <li><a href="#c">C</a></li>
                                <li><a href="#d">C</a></li>
                                <li><a href="#e">C</a></li>
                            </ul>
                            <div type="button" class="next" style="display: inline-block;background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:19px">Next</div>

                            <button type="submit" id="add_service_submit" class="savebutton" style="background-color:#6CB5F3;width:200px;text-align:center;text-transform:uppercase;padding:5px;font-size:18px;border:none;">Save</button>
                        </div>
                    </div>
                </div>
            </form>';

        echo json_encode($popup_data);die;
	}

	public function view_service_popup() {
		$service_id = $this->input->post('service_id');

		$params = array(
			'select' => 'id, title, description, sale_count, rate',
			'table' => 'services',
			'where' => array(
				'id' => $service_id,
				'is_deleted' => 0,
			)
		);
		$service_data = $this->global_model->select_with_join($params)->row();

		$params = array(
			'select' => '*',
			'table' => 'service_images',
			'where' => array(
				'service_id' => $service_id,
				'is_deleted' => 0
			)
		);
		$service_data->service_images = $this->global_model->select($params)->result(); //appending images to its relative service array

		$slider_images = '';
		$count = 0;
		foreach($service_data->service_images as $val) {
			$active = $count==0 ? ' active ' : '';
			$slider_images .= '<div class="item'.$active.'"><img src="'.base_url('assets/employee-uploads/images/service-pictures/').$service_id.'/'.$val->name.'"></div>';
			$count++;
		}

		$slider_indicator = '';
		for($i=0; $i<$count; $i++) {
			$indicator_active = $i==0 ? ' class="active" ' : '';
			$slider_indicator .= '<li data-target="#myCarousel" data-slide-to="0"'.$indicator_active.'></li>';
		}

		$popup_data =
			'<div class="modal-dialog" role="document">
    			<div class="modal-content">
			        <div class="modal-header vd_bg-green text-center" style="padding:10px;">
		  				<button type="button" class="vd_white close" data-dismiss="modal" aria-label="Close" style="float:left;opacity:1;font-size:3rem;">
          					<span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span>
        				</button>
        				<h4 class="modal-title vd_white">VIEW SERVICE</h4>
			      	</div>
      				<div class="modal-body view-service">
				        <!-- <form method="post">
						  	<div class="form-group">
						    	<h5>Attached PDF form</h5>
						  	</div>
						</form> -->
						<div class="col-md-12 col-sm-12 col-xs-12 ">
				            <div class="border-top"></div>
				            <div class="title" style="text-align:center">
					            <h2>'.$service_data->title.'</h2>
				            </div>
				            <div class="slider">
				              	<div id="myCarousel" class="carousel slide" data-ride="carousel">
								  	<!-- Indicators -->
								  	<ol class="carousel-indicators">
									    '.$slider_indicator.'
								  	</ol>

								  	<!-- Wrapper for slides -->
								  	<div class="carousel-inner">
									    '.$slider_images.'
								  	</div>

								  	<!-- Left and right controls -->
								  	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									    <span class="glyphicon glyphicon-chevron-left"></span>
									    <span class="sr-only">Previous</span>
								  	</a>
								  	<a class="right carousel-control" href="#myCarousel" data-slide="next">
									    <span class="glyphicon glyphicon-chevron-right"></span>
									    <span class="sr-only">Next</span>
								  	</a>
								</div>
            				</div>
            				<div class="job-detail-single">
              					<div class="post-single-job">
                					<div class="single-content">
                  						'.$service_data->description.'
                					</div>
                					<div class="single-comp-review">
                  						<div class="rev-box">
                    						<div class="rev-box-data">
                      							<h2><i class="fa fa-star-half-o"></i>Feedback</h2>
                      							<div class="data">
		                        					<ul class="review-star">
		                        						<i class="fa fa-star"></i>
		                        						<i class="fa fa-star"></i>
		                        						<i class="fa fa-star"></i>
		                        						<i class="fa fa-star"></i>
		                          						<i class="fa fa-star"></i>
		                        					</ul>
		                      					</div>
		                    				</div>
		                  				</div>
		                  				<div class="rev-box">
		                    				<div class="rev-box-data">
		                      					<h2><i class="fa fa-shopping-cart"></i>Sales</h2>
		                      					<div class="data">
		                        					<p>'.$service_data->sale_count.'</p>
		                      					</div>
		                    				</div>
		                  				</div>
		                  				<div class="rev-box">
		                    				<div class="rev-box-data">
		                      					<h2><i class="fa fa-euro"></i>Price</h2>
		                      					<div class="data">
		                        					<p>'.number_format($service_data->rate).'</p>
		                      					</div>
		                    				</div>
		                  				</div>                
					                </div>
		                  
		                			<div class="pull pull-left" style="width:100%">                		
										<button type="button" class="btn btn-danger" style="float:left" data-toggle="modal" data-target="#delete5">
											<span class="iconOption"><i class="fa fa-trash-o"></i></span>Remove
										</button>
					        		</div>

		              			</div>
		            		</div>           
		          		</div>
		      		</div>	  

			      	<div class="modal-footer vd_bg-white">		  
			      	</div>
		    	</div>
		  	</div>';

		echo json_encode($popup_data);
		die;
	}

	public function save_service() {
		$service_id = $this->input->post('service_id');
		$prev_images = $this->input->post('prev_images');
		$params = array(
			'table' => 'services',
			'data_to_insert' => array(
				'company_id' => $this->session->userdata()['employee_data']['user_info']->company_id,
				'title' => $this->input->post('service_title'),
				'description' => $this->input->post('description'),
				'start_date' => strtotime($this->input->post('service_start_date')),
				'end_date' => strtotime($this->input->post('service_end_date')),
				'appointment' => $this->input->post('appointment'),
				'sale_amount' => $this->input->post('sale_amount'),
				'work_days' => implode(',', $this->input->post('work_days')),
				'work_time' => implode(',', $this->input->post('work_time')),
				'validity' => $this->input->post('validity'),
				'rate' => $this->input->post('service_price'),
				'payment_methods' => implode(',', $this->input->post('payment_method')),
			)
		);

		try {
			$this->db->trans_start();

			if(isset($service_id)) {
				$params['where'] = array('id'=>$service_id);
				$this->global_model->update($params);
			} else {
				$this->global_model->insert($params);
				$service_id = $this->db->insert_id();
			}			

			$uploaded_images = $this->service_image_upload($service_id);

			for($i=0; $i<count($uploaded_images); $i++) {
				$batch_data[$i]['service_id'] = $service_id;
				$batch_data[$i]['name'] = $uploaded_images[$i];
			}

			if(!empty($batch_data)) {
				$params2 = array(
					'table' => 'service_images',
					'data_to_insert' => $batch_data
				);
				if(isset($service_id)) {
					$params3 = array(
						'table' => 'service_images',
						'data_to_insert' => array('is_deleted'=>1),
						'where' => array('service_id'=>$service_id)
					);
					$this->global_model->update($params3);

					$params5 = array(
						'table' => 'service_images',
						'data_to_insert' => array('is_deleted'=>0),
						'where_in' => 'name',
						'where_in_data' => $prev_images
					);
					$this->global_model->update($params5);//echo $this->db->last_query();die;
				}

				$this->global_model->insert_batch($params2);
			}
			$this->db->trans_complete();
			$this->session->set_flashdata('success', 'Service Added Successfully');
		} catch(Exception $e) {
			$this->session->set_flashdata('error', 'Adding Service Failed');
		}
		redirect('sale_services');
	}

	public function update_service() {
		printr($this->input->post());
	}

	public function service_image_upload($service_id) {
		$path = './assets/employee-uploads/images/service-pictures/'.$service_id.'/';
		$mkdir = mkdir($path, 0777);

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = TRUE;
		$config['max_size'] = '1000';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

	    $count = count($_FILES['service_images']['name']);//printr($_FILES['service_images']);echo $count;die;
	    $service_images = [];
 
        for($i=0; $i<$count; $i++) {
        	if (isset($_FILES['service_images']['name'][$i]) && $_FILES['service_images']['name'][$i] != '') {
	            if (0 < $_FILES['service_images']['error'][$i]) {
	            	$err_msg = 'Error during file upload' . $_FILES['service_images']['error'][$i];
	                $this->session->set_flashdata('error', $err_msg);
	                redirect('sale_services');
	            } else {
	                if (file_exists($path . $_FILES['service_images']['name'][$i])) {
	                    $err_msg = 'File already exists : ' . $path . $_FILES['service_images']['name'][$i];
	                    $this->session->set_flashdata('error', $err_msg);
		                redirect('sale_services');
	                } else {
	                	$_FILES['service_image']['name'] = $_FILES['service_images']['name'][$i];
		                $_FILES['service_image']['type'] = $_FILES['service_images']['type'][$i];
		                $_FILES['service_image']['tmp_name'] = $_FILES['service_images']['tmp_name'][$i];
		                $_FILES['service_image']['error'] = $_FILES['service_images']['error'][$i];
		                $_FILES['service_image']['size'] = $_FILES['service_images']['size'][$i];

	                    if (!$this->upload->do_upload('service_image')) {
	                        $err_msg = $this->upload->display_errors();
	                        $this->session->set_flashdata('error', $err_msg);
			                redirect('sale_services');
	                    } else {
		            		$uploaded_service_images[] = $this->upload->data('file_name');
	                    }
	                }
	            }
        	}
		}

		return $uploaded_service_images;
	}

	public function delete_service() {
		$service_id = $this->uri->segment(3);
		$params = array(
			'table' => 'services',
			'where' => array(
				'id' => $service_id
			)
		);
		$params2 = array(
			'table' => 'service_images',
			'where' => array(
				'service_id' => $service_id
			)
		);
		try {
			$this->global_model->soft_delete($params);
			$this->global_model->soft_delete($params2);

			$this->session->set_flashdata('success', 'Service Deleted Succefully');
		} catch(Excepion $e) {
			$this->session->set_flashdata('error', 'Service Deletion Failed');
		}

		redirect('sale_services');
	}

}

/* End of file Sale_services.php */
/* Location: ./application/controllers/Sale_services.php */