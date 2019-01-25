<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {

	public function getchathistory($chatroomid,$limit=20,$offset=0) 
	{
		$this->db->select('*');
		$this->db->from('communication');
		$this->db->where(array('is_deleted'=>'0','chatroom_id'=>$chatroomid));
		$this->db->limit($limit,$offset);
		$this->db->order_by('id','desc');							
		$query=$this->db->get();
		// echo $this->db->last_query();	
		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else return false;
	}
	public function search_document()
	{
		$company_id=($this->session->userdata('employee_data'))['user_info']->company_id;
		$doctype=$this->input->post('doctype',true);
		$name=$this->input->post('filtername',true);
		$jobid=$this->input->post('job_id',true);
		if($doctype=='all')
			$doctype=false;
		$doccond="url like '%.$doctype'";
		if($doctype=='img')
		{
			$doccond="(url like '%.jpg' or url like '%.png' or url like '%.gif' or url like '%.svg')";
		}
		$this->db->select('url,co.id,co.sender,created_at');
		$this->db->from('chatroom c');
		$this->db->join('communication co','co.chatroom_id=c.roomid');
		$this->db->where(array('is_deleted'=>'0','type'=>'2'));
		if($doctype)
		$this->db->where($doccond);
		if($name)
		$this->db->where("url like '$name%'");
	 	if($jobid)
	 	$this->db->where('jobid',$jobid);
	 	$this->db->where("c.company_id=".$company_id);
	 	$query=$this->db->get();
	 	if($query->num_rows()>0)
	 	{
	 		return $query->result();
	 	}
	 	else
	 	{
	 		return array('error_message'=>'No documents found');
	 	}
	}	

	function get_chatroom_detail($chatroomid,$company_id)
	{
		
		$this->db->where('roomid',$chatroomid);
		$query=$this->db->get('chatroom');
		if($query->num_rows()>0)
		{
			$result=$query->row_array();
			if($result['company_id']==$company_id)
			{
				return $result;
			}
			else
			{ 
				return array('error_message'=>'You are not authorized to enter this chatroom');
			}
		}
		else
		{
			return array('error_message'=>'No Such Chatroom Found');
		}
	}

	public function get_all_chatroom()
	{
		$filtername=$this->input->post('filtername',true);
		$name=explode(' ',$filtername);
		$companyid=$this->session->userdata('employee_data')['user_info']->company_id;
		$this->db->select('(select count(id) from communication where chatroom_id=c.roomid and sender="u" and is_seen="0") as messagecount,c.*,u.profile_picture,concat(u.first_name," ",u.last_name)as client_name,j.job_name');
		$this->db->from('chatroom c');
		$this->db->join('job_title j','c.job_id=j.job_id');
		$this->db->join('user u','u.id=c.user_id');
		$this->db->where(array('c.status'=>'0','c.company_id'=>$companyid));
		if($filtername)
		{
			if(count($name)<2)
			{
				$this->db->where("u.first_name like '%$name[0]%' or u.last_name like '%$name[0]%'");
			}
			else
			{
				$this->db->where("u.first_name like '%$name[0]%' and u.last_name like '$name[1]%'");
			}	
		}
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$chatroomlist=array();
			$result=$query->result();
			foreach($result as $eachresult)
			{
				$chatroomlist[$eachresult->job_id][]=$eachresult;
			}
			return $chatroomlist;
		}
		else
		{
			return array('error_message'=>'No data found');
		}
	}

	public function get_user_data($userid)
	{
		$query=$this->db->get_where('user',array('id'=>$userid));
		if($query->num_rows()>0)
		{
			return $query->row();
		}
		return false;
	}
	public function save_chat_message($chatroomdetail)
	{
		$text=$this->input->post('text',true);
		$chatroom_id=$this->input->post('chatroom',true);
		$data=array(
						'text'		=>		$text,
						'job_id'	=>		$chatroomdetail['job_id'],
						'sender'	=>		'c',
						'created_at'=>		date('Y-m-d H:i:s'),
						'chatroom_id'=>		$chatroom_id
				   );
		$data['url']='';
		if($_FILES['file']['name'])
        {
            $fdata=$this->file_settings_do_upload('file',CHAT_ATTACHMENT_PATH);
            if($fdata)
            {
                $data['url']= $fdata['file_name'];
                $data['type']='2';
            }
            else
            {
                return array('error_message'=>$this->error_img);
            }

        }
        else 
        {
        	$data['type']='1';
        }
        $this->db->insert('communication',$data);
        return $data['url'];
	}

	public function file_settings_do_upload($file, $location, $encrypt_filename = '') 
	 {
	 	$this->load->library('upload');
        $config['upload_path'] = './' . $location;   //file upload location
        $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp|pdf|docx';
        $config['remove_spaces'] = TRUE;
        $config['max_size'] = '4048';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        if (!file_exists($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }
        if ($encrypt_filename == 'encrypt') {
            $config['encrypt_name'] = TRUE;
        }

        $this->upload->initialize($config);
        $this->upload->do_upload($file);
        if ($this->upload->display_errors()) {
            $this->error_img = $this->upload->display_errors();
            return false;
        } else {
            $data = $this->upload->data();
            return $data;
        }
    }

    Public function make_message_seen($chatroomid)
    {
    	$this->db->update('communication',array('is_seen'=>'1'),array('sender'=>'u','chatroom_id'=>$chatroomid,'is_seen'=>'0','is_deleted'=>'0'));
    	return true;
    }
}
