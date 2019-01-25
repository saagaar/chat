<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public $userid;
	public function __construct() {
		parent:: __construct();

		$this->load->model('chat_model','model');
		$this->session->set_userdata('id',2);
	}

	public function room($chatroomid=false)	
	{
		try
		{
			$this->userid=$this->session->userdata('id');
			$allchatroom=$this->model->get_all_chatroom();
			$data['userid']=$this->userid;
			$data['employee_data']['side_nav'] = 'message';
			$data['chathistory']=false;
			$data['profilePicture_company']='';
			if($chatroomid)
			{
				$response=$this->model->get_chatroom_detail($chatroomid,$this->userid);	
				if(isset($response['error_message']))
				{
					throw new exception($response['error_message'],1);
				}
				$userdetail=$this->model->get_company_user_data($response['company_id']);
				$this->model->make_message_seen($chatroomid);
				$data['chathistory']=$this->model->getchathistory($chatroomid);
				$data['company_id']=$response['company_id'];
				$data['user_id']=$response['user_id'];
				$data['profilePicture_company']=$userdetail->photo;
			}
			$usertype='user';
			$data['chatroomid']=$chatroomid;
			$data['documentlist']=$this->model->search_document();
			$data['allchatroom']=$allchatroom;
			$data['loggeduser']=$this->session->userdata('id');
			$data['usertype']='u';
			$data['profilePicture']=$this->session->userdata('profile_picture');
			
			$data['view']='chat';
			$this->load->view('chat/chat',$data);
		}
		catch(exception $e)
		{
			$this->session->set_flashdata('error_message',$e->getMessage());
			redirect(base_url('chat/room'));
			exit;
		}
		
	}
	public function ajax_chat_history($chatroomid=false,$page=0)
	{
		try
		{
			$limit=20;
			$userid=$this->session->userdata('id');
			$response=$this->model->get_chatroom_detail($chatroomid,$userid);
			if(isset($response['error_message']))
			{
				throw new exception($response['error_message'],1);
			}
			$userdetail=$this->model->get_company_user_data($response['company_id']);
			$data['chatroomid']=$chatroomid;
			$data['chathistory']=$this->model->getchathistory($chatroomid,$limit,$limit*$page);
			$data['loggeduser']=$this->session->userdata('id');
			$data['usertype']='u';
			$data['profilePicture']=$this->session->userdata('profile_picture');
			$data['profilePicture_company']=$userdetail->photo;
			$this->model->make_message_seen($chatroomid);
			$data['company_id']=$response['company_id'];
			$data['user_id']=$response['user_id'];
			$data['view']='chat';
			$data['userid']=$userid;
			echo $this->load->view('chat/ajax_chat_history',$data,true);
		}
		catch(exception $e)
		{
			echo json_encode(array('error_message'=>$e->getMessage()));exit;
		}
	}

	public function user_profile()
	{
		$data['view']='userprofile';
		$this->load->view('chat/chat',$data);
	}
	public function save_chat_message() 
	{
		$user_id=$this->session->userdata('id');
		$chatroomid=$this->input->post('chatroom');
		$dataresponse=$this->model->get_chatroom_detail($chatroomid,$user_id);
		if(isset($dataresponse['error_message']))
		{
			echo json_encode($dataresponse);
		}
		else
		{
			$response=$this->model->save_chat_message($dataresponse);
			if(isset($response['error_message']))
			{
				echo json_encode(array('error_message'=>$response['error_message']));
			}
			else
			{
				echo json_encode(array('success_message'=>'Message Send Successfully','url'=>$response));
			}
		}
		
		exit;
	}
	public function search_document()
	{
		$userid=$this->session->userdata('id');
		$this->userid=$userid;
		$data=$this->model->search_document();
		echo json_encode($data);
		exit;
	}
	public function get_user_search()
	{
		$userid=$this->session->userdata('id');
		$this->userid=$userid;
		$allchatroom=$this->model->get_all_chatroom();
		echo json_encode($allchatroom);exit;
	}
	
}

