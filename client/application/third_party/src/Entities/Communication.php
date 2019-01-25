<?php
namespace MyApp\Entities;
 // require '../../vendor/autoload.php';
class Communication extends \Illuminate\Database\Eloquent\Model {
	protected $table = 'communication';
	protected $fillable = ['text', 'url', 'sender_id','receiver_id', 'type','job_id','sender'];
}