<?php
class Character extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('character_model');
		$this->load->library('phpbb');
		$this->load->driver('session');
		$this->load->library('Nav');
	}

	public function index()
	{
		$data['title'] = "View Character";
		$menu = new Nav;
		$data['nav'] = $menu->get_Nav();
		if($this->phpbb->isLoggedIn() === TRUE)
		{
			$userId = $this->phpbb->getUserInfo('user_id');
			$username = $this->phpbb->getUserInfo('username');
			$data['loginInfo']['userId'] = $userId;
			$data['loginInfo']['username'] = $username;
		  
			$this->load->view('templates/header', $data);
		  $data['character'] = $this->character_model->get_character($userId);
		  $this->load->view('character/index', $data);
		  $this->load->view('templates/footer');
		}
		else
		{
		 $data['loginInfo']['nLog'] = TRUE;
		 $this->load->view('templates/header', $data);
		 $this->load->view('welcome_message');
		 $this->load->view('templates/footer', $data);
		}
	}

}
