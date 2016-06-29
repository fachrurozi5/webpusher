<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_controller extends CI_Controller {

  public $pusher;

  public function __construct()
  {
    parent::__construct();
    $this->pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
  }

  public function index()
  {
    show_404();
  }

  public function send_message()
  {
    $message_item = json_decode($this->input->raw_input_stream, true);

    log_message('debug', json_encode($message_item));

		$this->pusher->trigger('group_chat', 'message_event', $message_item);

    $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($message_item));
  }

}
