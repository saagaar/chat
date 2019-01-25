<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->model('chat_model','model');
		
	}

	public function room($chatroomid=false)	
	{
		try
		{
			$allchatroom=$this->model->get_all_chatroom();
			$company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
			$data['employee_data']['side_nav'] = 'message';
			$data['profilePicture_user']='';
			if($chatroomid)
			{
				$response=$this->model->get_chatroom_detail($chatroomid,$company_id);
				if(isset($response['error_message']))
				{
					throw new exception($response['error_message'],1);
				}
				$this->model->make_message_seen($chatroomid);
				$data['chatroomid']=$chatroomid;
				$data['chathistory']=$this->model->getchathistory($data['chatroomid']);
				$userdetail=$this->model->get_user_data($response['user_id']);
				$data['profilePicture_user']=$userdetail->profile_picture;
			}
			
			$usertype='client';
				
			$data['documentlist']=$this->model->search_document();
			$data['allchatroom']=$allchatroom;
			$data['loggeduser']=$this->session->userdata('employee_data')['user_info']->id;
			$data['usertype']='c';
			$data['profilePicture']=$this->session->userdata('employee_data')['user_info']->profile_picture;
			
			
			$data['company_id']=$response['company_id'];
			$data['user_id']=$response['user_id'];
			$data['view']='chat';
			$this->load->view('client/chat/chat',$data);
		}
		catch(exception $e)
		{
			$this->session->set_flashdata('error_message',$e->getMessage());
			redirect(site_url('chat/room'));
			exit;
		}
	}
	public function ajax_chat_history($chatroomid=false,$page=0)
	{
		try
		{
			$limit=20;
			$company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
			$response=$this->model->get_chatroom_detail($chatroomid,$company_id);
			$userdetail=$this->model->get_user_data($response['user_id']);
			
			if(isset($response['error_message']))
			{
				throw new exception($response['error_message'],1);
			}
			$data['chatroomid']=$chatroomid;
			$data['chathistory']=$this->model->getchathistory($chatroomid,$limit,$limit*$page);
			$data['loggeduser']=$this->session->userdata('employee_data')['user_info']->id;
			$this->model->make_message_seen($chatroomid);
			$data['usertype']='c';
			$data['profilePicture']=$this->session->userdata('employee_data')['user_info']->profile_picture;
			$data['profilePicture_user']=$userdetail->profile_picture;
			$data['company_id']=$response['company_id'];
			$data['user_id']=$response['user_id'];
			$data['view']='chat';
			$data['userid']=$this->session->userdata('employee_data')['user_info']->id;	
			echo $this->load->view('client/chat/ajax_chat_history',$data,true);
		}
		catch(exception $e)
		{
			echo json_encode(array('error_message'=>$e->getMessage()));exit;
		}
	}

	public function user_profile()
	{
		$data['view']='userprofile';
		$this->load->view('client/chat/chat',$data);
	}

	public function save_chat_message() 
	{
		$company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
		$chatroomid=$this->input->post('chatroom');
		$dataresponse=$this->model->get_chatroom_detail($chatroomid,$company_id);
		if(isset($dataresponse['error_message']))
		{
			echo json_encode($dataresponse);
		}
		else
		{
			$response=$this->model->save_chat_message($dataresponse);
			if(isset($response['error_message']))
			{
				echo json_encode(array('error_message'=>$response['error_message']));exit;
			}
			else
			{
				
				echo json_encode(array('success_message'=>'Message Send Successfully','url'=>$response));exit;
			}
		}
		exit;
	}
	public  function search_document()
	{

		$data=$this->model->search_document();
		header('Content-Type: application/json');
		echo json_encode($data);exit;
	}
	public function get_user_search()
	{
		$allchatroom=$this->model->get_all_chatroom();
		echo json_encode($allchatroom);exit;
	}
	

}

