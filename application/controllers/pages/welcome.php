<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
   public function __construct()
   {
	 	parent::__construct();
	 	$this->load->model('die_model');
		$this->load->database();
		$this->load->driver('session');
		$this->load->library('phpbb');
		$this->load->library('Nav');
	 }
	
  public function index()
	{
		$menu = new Nav;
	  $data['nav'] = $menu->get_Nav();	
		$data['title'] = "Welcome to d20tools"; 
		if($this->phpbb->isLoggedIn() === TRUE)
		{
			$userId = $this->phpbb->getUserInfo('user_id');
			$username = $this->phpbb->getUserInfo('username');
			$data['loginInfo']['userId'] = $userId;
			$data['loginInfo']['username'] = $username;
		}
		else
		{
		 $data['loginInfo']['nLog'] = TRUE;
		}
		$this->load->view('templates/header', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
