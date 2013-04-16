<?php
class Spells extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('spells_model');
		$this->load->library('phpbb');
		$this->load->driver('session');
		$this->load->library('Nav');
	}

	public function index()
	{
		$data['title'] = "View Spells";
		$menu = new Nav;
		$data['nav'] = $menu->get_Nav();
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
		$data['spells'] = $this->spells_model->get_spells();
		$this->load->view('spells/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($spell_id)
	{
		$data['title'] = "View Spells";
		$menu = new Nav;
		$data['nav'] = $menu->get_Nav();
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
		$data['spells'] = $this->spells_model->get_spells($spell_id);
		$this->load->view('spells/view', $data);
		$this->load->view('templates/footer');
	}
}
