<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General {

	protected $ci;
	protected $status;
	protected $errors = array();

	public function __construct()
	{
		$this->ci =& get_instance();
	}

  public function create_chatroom($jobid,$userid,$companyid)
  {
    return $chatroomid=md5(COMPANY_NAME.".$jobid-$userid-$companyid");
  }

	Public function time_elapsed_string($ptime)
    {
        $etime = time() - strtotime($ptime);
        if ($etime < 1)
        {
            return '0 sec';
        }
        $a = array( 365 * 24 * 60 * 60  =>  'year',
                     30 * 24 * 60 * 60  =>  'month',
                          24 * 60 * 60  =>  'day',
                               60 * 60  =>  'hour',
                                    60  =>  'minute',
                                     1  =>  'second'
                    );
        $a_plural = array( 'year'   => 'y',
                           'month'  => 'm',
                           'day'    => 'd',
                           'hour'   => 'h',
                           'minute' => 'min',
                           'second' => 'sec'
                    );

        foreach ($a as $secs => $str)
        {
             $d = $etime / $secs;
            if ($d >= 1)
            {
                $r = round($d);
                return $r. ($r > 1 ? $a_plural[$str] : $str) . ' ago';
            }
        }
    }

    public function get_unseen_message($companyid)
    {
      $ci=& get_instance();
      $ci->db->select('count(co.id) as count');
      $ci->db->from('communication co');
      $ci->db->join('chatroom c' , 'c.roomid=co.chatroom_id');
      $ci->db->where('c.company_id='.$companyid);
      $ci->db->where('co.is_seen="0"');
      $ci->db->where('co.is_deleted="0"');
      $ci->db->where('co.sender="u"');
      $query=$ci->db->get();
      return $query->row()->count;
    }
}