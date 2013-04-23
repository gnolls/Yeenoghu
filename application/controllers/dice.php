<?php

	class Dice extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->driver('session');
			$this->load->library('phpbb');
			$this->load->library('Nav');
			$this->load->model('die_model');
		}
		
		public function index()
		{
			$data['title'] = "Roll your fate";
			$menu = new Nav;
			$data['nav'] = $menu->get_Nav();	 
			if($this->phpbb->isLoggedIn() === TRUE)   //Check if user is logged in Pul user_id and username
			{
				$userId = $this->phpbb->getUserInfo('user_id');
				$username = $this->phpbb->getUserInfo('username');
				$data['loginInfo']['userId'] = $userId;
				$data['loginInfo']['username'] = $username;
			}
			else //User was not loggeed in
			{
				$data['loginInfo']['nLog'] = TRUE;
			}
			$this->load->view('templates/header', $data); //Pass the data to the view
			$this->load->view('dice/index', $data);
			$this->load->view('templates/footer');
		}


		public function roll()
		{
			$this->load->helper('form');
			$this->load->library('form_validation'); 
			$menu = new Nav;
			$data['nav'] = $menu->get_Nav();
			$data['title'] = "Your fate is...";
			$this->form_validation->set_rules('numSides', 'Number of Sides', 'xss_clean|required|is_natural_no_zero');

			if($this->form_validation->run() == FALSE) 						//check to see if the filled out the form
			{

				if($this->phpbb->isLoggedIn() === TRUE)						//Login check this should be compacted some how.
				{
					$userId = $this->phpbb->getUserInfo('user_id');
					$username = $this->phpbb->getUserInfo('username');
					$data['loginInfo']['userId'] = $userId;
					$data['loginInfo']['username'] = $username;
				}
				else
				{
					$data['loginInfo']['nLog'] = TRUE;
				}                                                             //end of login check

				$this->load->view('templates/header', $data);
				$this->load->view('dice/index', $data);                      //load the data into the view
				$this->load->view('templates/footer');
				}
			else  															//Form validation returns true a.k.a Sucessfull Roll parameters 
			{
				if($this->phpbb->isLoggedIn() === TRUE)						//Login check this should be compacted some how.
				{
					$userId = $this->phpbb->getUserInfo('user_id');
					$username = $this->phpbb->getUserInfo('username');
					$data['loginInfo']['userId'] = $userId;
					$data['loginInfo']['username'] = $username;
				}
				else
				{
					$data['loginInfo']['nLog'] = TRUE;
				}                                                           //end of login check

				$this->load->view('templates/header', $data);
				$data['roll'] = $this->die_model->rollDice();				//Send the rolled value to the view
				$this->load->view('dice/roll', $data);
				$this->load->view('templates/footer');
			}
		}//end roll function
}
?>
