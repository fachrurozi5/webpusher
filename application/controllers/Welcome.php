<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->add_package_path(APPPATH.'third_party/bower');
    $this->load->library('bower');
    $this->load->remove_package_path(APPPATH.'third_party/bower');

		$css = $this->bower->css('page');
		$css[] = $this->bower->add('http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700');

		$js = $this->bower->js('page');

    $this->load->view('welcome_message', [
        'css' => $css,
        'js' => $js
    ]);
	}

	public function testing()
	{

		$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);

		$pusher->trigger('my-channel', 'my_event', 'hello world Boy' );

		echo "Pusher Test";
	}
}
