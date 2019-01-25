<?php
namespace MyApp;
require(dirname(__DIR__).'/third_party/autoload.php');
require(dirname(__DIR__).'/third_party/src/Entities/Communication.php');


use MyApp\Entities\Communication;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\WampServerInterface;
use Ratchet\MessageComponentInterface;
use Guzzle\Http\url;

class Pusher implements WampServerInterface {
    protected $subscribedTopics = array();
    public $ci;
    protected $userlist=array();

    public function onSubscribe(ConnectionInterface $conn, $topic) 
    {

        $this->subscribedTopics[$topic->getId()] = $topic;
        echo 'User subscribed to chatroom:'.$topic.'-----';
        echo 'No of user subscription--->'.count($this->subscribedTopics);
    }

    public function onUnSubscribe(ConnectionInterface $conn, $topic) 
    {
      // unset($this->subscribedTopics[$topic->getId()]);
      echo 'Socket disconnected';
      echo ('No of user subscription--->'.count($this->subscribedTopics));
    }
    public function onOpen(ConnectionInterface $conn) {
        print_r($conn->httpRequest);
        echo 'we are in open socket';
        
    }
    public function onClose(ConnectionInterface $conn) {
        echo 'we are in close socket';
    }
    public function onCall(ConnectionInterface $conn, $id, $topic, array $params) {
        // In this application if clients send data it's because the user hacked around in console
        $conn->callError($id, $topic, 'You are not allowed to make calls')->close();
    }
    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible) 
    {
        $msg = ($event);        
        echo '<pre>';
        print_r($msg);
        $chatroom = $this->subscribedTopics[$msg['chatroom']];
        $chatroom->broadcast($msg,$exclude);

              
    }
    public function onError(ConnectionInterface $conn, \Exception $e) {
    }

    
}