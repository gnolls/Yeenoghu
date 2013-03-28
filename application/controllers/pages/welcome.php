<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
   public function __construct()
   {
	 	parent::__construct();
	 	$this->load->model('die_model');
		$this->load->library('Nav');
	 }
	
  public function index()
	{
		$menu = new Nav;
	  $data['nav'] = $menu->get_Nav();	 
		$this->load->view('templates/header', $data);
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
