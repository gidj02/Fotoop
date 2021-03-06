<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function index(){
		$this->home();
	}

	public function home(){
		$this->render('home');
	}

	public function render($view){
		$this->load->view('template/header');
		$this->load->view($view);
		$this->load->view('template/footer');
	}
}