<?php
require_once('controllers/BaseController.php');

class ChatController extends BaseController
{
  function __construct()
  {
    $this->folder = 'chat';
  }
  public function home()
  {
    if(isset($_POST['action']))
    if($_POST['action'] == 'send_message')
    {
      $this->sendMessage();
    }
    $users = new User();
    $data = $users->get();
    $this->render('chat', $data);
  }

  public function error()
  {
    $this->render('error');
  }

  public function sendMessage(){
    $users = new User();
    $data = $users->get();
    $message = $_POST['message'];
    $array_insert = array(
      count($data) => $message
    );
    $users->insert($array_insert);
    die();
  }
}