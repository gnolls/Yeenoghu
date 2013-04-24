<?php

	class About  extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->driver('session');
			$this->load->library('phpbb');
			$this->load->library('Nav');
		}
		
		public function index()
		{
			$data['title'] = "What it is all about";
			$menu = new Nav;
			$data['nav'] = $menu->get_Nav();	 
			if($this->phpbb->isLoggedIn() === TRUE)   //Check if user is logged in Pul user_id and username
			{
				$userId = $this->phpbb->getUserInfo('user_id');
				$username = $this->phpbb->getUserInfo('username');
   		  $data['userAvatar'] = $this->phpbb->getUserAvatar(0,0,0,0);
				$data['loginInfo']['userId'] = $userId;
				$data['userSID'] = $this->phpbb->session_id();
				$data['loginInfo']['username'] = $username;
			}
			else //User was not loggeed in
			{
				$data['loginInfo']['nLog'] = TRUE;
			}
			$this->load->view('templates/header', $data); //Pass the data to the view
			$this->load->view('about/index', $data);
			$this->load->view('templates/footer');
		}


}
