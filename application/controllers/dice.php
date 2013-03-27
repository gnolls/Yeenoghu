<?php

    class Dice extends CI_Controller
    {

	public function __construct()
        {
	  parent::__construct();
	  $this->load->model('die_model');

	}
        
        public function index()
        {
             $data['title'] = "Roll your fate";
             $this->load->view('templates/header', $data);
             $this->load->view('dice/index');
             $this->load->view('templates/footer');
        }


        public function roll()
        {
	    $this->load->helper('form');
	    $this->load->library('form_validation'); 
            $data['title'] = "Your fate is...";
            $this->form_validation->set_rules('numSides', 'Number of Sides', 'required');
           
            if($this->form_validation->run() == FALSE) //check to see if the filled out the form
	    {
              $this->load->view('templates/header', $data);
              $this->load->view('dice/index', $data);
              $this->load->view('templates/footer');
	    }
            else
            {
              $this->load->view('templates/header', $data);
              $data['roll'] = $this->die_model->rollDice();
              $this->load->view('dice/roll', $data);
              $this->load->view('templates/footer');
            }
        }
}
?>
