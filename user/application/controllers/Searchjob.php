<?php 

class Searchjob extends Users_Controller 
{
	public function __construct()
	{
		parent::__construct();

		// this form valiadtion is called in the CI_CONTROLLER
		// $this->load->library('form_validation');
		$this->load->model('searchjob_model');

	}

	public function index()
	{
		$this->data['active_side'] = 'searchajob';
		$this->renderTemplate('searchajob', $this->data);
	}

	// add the document information into the user_document table
	public function addDocument()
	{

		$validator = array('success' => false, 'messages' => array());

		/* Validate form input */
        $this->form_validation->set_rules('project_title', 'Title', 'required');
        $this->form_validation->set_rules('project_detail', 'Detail', 'required');


        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

        if ($this->form_validation->run() == TRUE)
        {

        	$user_id = $this->session->userdata('id');
            $data_insert = array(
            	'name' => $this->input->post('project_title'),
            	'description' => $this->input->post('project_detail'),
            	'user_id' => $user_id
            );

            $createDocument = $this->searchjob_model->createDocument($data_insert);

            try {
            	if($createDocument == true) {
	            	$validator['success'] = true;
	            	$valiadtion['messages'] = 'Successfully created';
	            }
	            else {
	            	$validator['success'] = false;
	            	$valiadtion['messages'] = 'Error';	
	            }
            }
            catch(Exception $e) {
            	$validator['success'] = false;
            	$validator['messages'] = 'Fatal Error: ' . $e->getMessage();
            }
	            
        }
        else { 
        	$validator['success'] = false;
         	foreach ($_POST as $key => $value) {
        		$validator['messages'][$key] = form_error($key);
        	} // /foreach
        }

        echo json_encode($validator);
	}

	// upload the user document 
	public function upload()
	{
        $config['upload_path'] = 'upload/user_document';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('document_file'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['document_file']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
    }



}