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

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = "Create Character";
		$menu = new Nav;
		$data['nav'] = $menu->get_Nav();
		if($this->phpbb->isLoggedIn() === TRUE)
		{
			$userId = $this->phpbb->getUserInfo('user_id');
			$username = $this->phpbb->getUserInfo('username');
			$data['loginInfo']['userId'] = $userId;
			$data['loginInfo']['username'] = $username;

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('class', 'class', 'required');
			$this->form_validation->set_rules('race', 'race', 'required');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('character/create', $data); //load the character sheet form
				$this->load->view('templates/footer');
			}
			else
			{
				$this->character_model->set_character($userId);
				$this->load->view('templates/header', $data);
				$this->load->view('character/success', $data); //load the successful creation page
				$this->load->view('templates/footer');
			}
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
